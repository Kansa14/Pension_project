<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ag_emp_logins;
use Hash;
use Session;

class empLoginController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function try()
    {
        return view("auth.try");
    }

    public function registerUser(Request $request)
    {
        echo "Value Posted";
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            // 'gpf_series'=>'required', // Assuming this is optional
            'gpf_acc_no'=>'required',
            'pin'=>'required|min:4|max:10'
        ]);

        // Retrieve the user based on the provided account number
        $user = ag_emp_logins::where('gpf_acc_no', $request->gpf_acc_no)->first();

        // Check if the user exists
        if ($user) {
            // Verify the password
            if ($request->pin == $user->rawmpin) {
                // Store user's login ID in session
                $request->session()->put('loginId', $user->app_no);
                
                // Redirect to the dashboard route
                return redirect()->route('dashboard');
            } else {
                // Password does not match
                return back()->with('fail', 'Password does not match');
            }
        } else {
            // User with provided account number does not exist
            return back()->with('fail', 'User with provided account number does not exist.');
        }
    }

    public function dashboard(Request $request)
    {
        // Fetch additional data needed for the dashboard if necessary
        $loginId = $request->session()->get('loginId');

        // Return the dashboard view
        return 'Welcome To Dashboard';
    }
}
