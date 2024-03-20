<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with Roles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add custom styles here if needed */
        .card {
            width: 80%; /* Adjust the width as needed */
            margin: 0 auto; /* Center the card horizontally */
        }
    </style>
</head>
<body>
  <form id="login-form" action="{{ route('login-user') }}" method="post">
    @if(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif
    @csrf
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8"> 
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Select Role:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option" id="admin" value="option1">
                                <label class="form-check-label" for="admin">Subcriber</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option" id="employee" value="option2">
                                <label class="form-check-label" for="employee">DDO</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="option" id="pension_admin" value="option3">
                                <label class="form-check-label" for="pension_admin">Treasury</label>
                            </div>
                            <div id="dropdown-container" name="gpf_series">
                                <!-- Dropdown menu will be dynamically added here -->
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </form>

<script>
  // Function to create the dropdown menu based on selected radio option
  function createDropdown(selectedOption) {
    const dropdownContainer = document.getElementById('dropdown-container');
    dropdownContainer.innerHTML = ''; // Clear previous dropdown

    if (selectedOption === 'option1') {
      // Create dropdown for Option 1
      const dropdown = document.createElement('select');
      dropdown.innerHTML = `
        <option value="1">GPF Series</option>
        <option value="2"> Choice 2</option>
        <option value="3"> Choice 3</option>
      `;
      dropdownContainer.appendChild(dropdown);
      // Add extra form fields for Option 1
      dropdownContainer.innerHTML += `
        <div class="form-group">
            <input type="text" id="no" name="gpf_acc_no" placeholder="GPF Account No"  value="{{ old('gpf_acc_no') }}" required>
            <span class="text-danger">@error('gpf_acc_no'){{ $message }} @enderror</span>
        </div>
        <div class="form-group">
            <input type="password" id="pin" name="pin" placeholder="Pin" required>
            <span class="text-danger">@error('pin'){{ $message }} @enderror</span>
        </div>
      `;
    } 
    else if (selectedOption === 'option2') {
      // Add extra form fields for Option 2
      dropdownContainer.innerHTML += `
        <div class="form-group">
            <input type="text" id="id" name="user_id" placeholder="User Id"  value="{{ old('user_id') }}" required>
            <span class="text-danger">@error('user_id'){{ $message }} @enderror</span>
        </div>
        <div class="form-group">
            <input type="password" id="pin" name="pin" placeholder="Pin"  required>
            <span class="text-danger">@error('pin'){{ $message }} @enderror</span>
        </div>
      `;
    } else if (selectedOption === 'option3') {
      // Add extra form fields for Option 3
      dropdownContainer.innerHTML += `
        <div class="form-group">
             <input type="text" id="treasury" name="treasury" placeholder="Treasury"  value="{{ old('treasury') }}" required>
             <span class="text-danger">@error('treasury'){{ $message }} @enderror</span>
        </div>
        <div class="form-group">
            <input type="password" id="pin" name="pin" placeholder="Pin"  required>
            <span class="text-danger">@error('pin'){{ $message }} @enderror</span>

        </div>
      `;
    }
  }

  // Event listener to trigger creation of dropdown when radio option is selected
  const radioButtons = document.querySelectorAll('input[type="radio"][name="option"]');
  radioButtons.forEach(radioButton => {
    radioButton.addEventListener('change', (event) => {
      const selectedOption = event.target.value;
      createDropdown(selectedOption);
    });
  });

  // Prevent form submission and handle it using JavaScript
  document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission
    // You can add your custom login logic here if needed
    // For now, let the form submission handle it
    this.submit(); // Submit the form
  });
</script>

</body>
</html>
