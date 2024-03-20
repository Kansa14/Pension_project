<!--<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dropdown Menu based on Radio Option</title>
</head>
<body>

<form>
  <input type="radio" name="option" value="option1">Subscriber<br>
  <input type="radio" name="option" value="option2">DDO<br>
  <input type="radio" name="option" value="option2">Treasury<br>
</form>

<div id="dropdown-container">
    Dropdown menu will be dynamically added here 
</div>

<script>
  // Function to create the dropdown menu based on selected radio option
  function createDropdown(selectedOption) {
    const dropdownContainer = document.getElementById('dropdown-container');
    dropdownContainer.innerHTML = ''; // Clear previous dropdown

    if (selectedOption === 'option1')
     {
      // Create dropdown for Option 1
      const dropdown = document.createElement('select');
      dropdown.innerHTML = `
        <option value="1">Option 1 - Choice 1</option>
        <option value="2">Option 1 - Choice 2</option>
        <option value="3">Option 1 - Choice 3</option>
        <div class="form-group">
            <input type="text" id="no" name="account_no" placeholder="GPF Account No" required>
        </div>
        <div class="form-group">
            <input type="password" id="pin" name="pin" placeholder="Pin" required>
        </div>
      `;
      dropdownContainer.appendChild(dropdown);
    } else if (selectedOption === 'option2') 
    {
      // Create dropdown for Option 2
      const dropdown = document.createElement('select');
      dropdown.innerHTML = `
      <div class="form-group">
            <input type="text" id="id" name="user_id" placeholder="User Id"required>
        </div>
        <div class="form-group">
            <input type="password" id="pin" name="pin" placeholder="Pin" required>
        </div>
      `;
      dropdownContainer.appendChild(dropdown);
    }

    else if (selectedOption === 'option3') 
    {
      // Create dropdown for Option 2
      const dropdown = document.createElement('select');
      dropdown.innerHTML = `
        <div class="form-group">
             <input type="text" id="treasury" name="treasury" placeholder="Treasury" required>
        </div>
        <div class="form-group">
            <input type="password" id="pin" name="pin" placeholder="Pin" required>
        </div>
      `;
      dropdownContainer.appendChild(dropdown);
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
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dropdown Menu based on Radio Option</title>
</head>
<body>

<form>
  <input type="radio" name="option" value="option1">Subscriber<br>
  <input type="radio" name="option" value="option2">DDO<br>
  <input type="radio" name="option" value="option3">Treasury<br>
</form>

<div id="dropdown-container">
  Dropdown menu will be dynamically added here
</div>

<script>
  // Function to create the dropdown menu based on selected radio option
  function createDropdown(selectedOption) {
    const dropdownContainer = document.getElementById('dropdown-container');
    dropdownContainer.innerHTML = ''; // Clear previous dropdown

    if (selectedOption === 'option1') {
      // Create dropdown for Option 1
      const dropdown = document.createElement('select');
      dropdown.innerHTML = `
        <option value="1">Option 1 - Choice 1</option>
        <option value="2">Option 1 - Choice 2</option>
        <option value="3">Option 1 - Choice 3</option>
      `;
      dropdownContainer.appendChild(dropdown);
      // Add extra form fields for Option 1
      dropdownContainer.innerHTML += `
        <div class="form-group">
            <input type="text" id="no" name="account_no" placeholder="GPF Account No" required>
        </div>
        <div class="form-group">
            <input type="password" id="pin" name="pin" placeholder="Pin" required>
        </div>
      `;
    } else if (selectedOption === 'option2') {
      // Add extra form fields for Option 2
      dropdownContainer.innerHTML += `
        <div class="form-group">
            <input type="text" id="id" name="user_id" placeholder="User Id"required>
        </div>
        <div class="form-group">
            <input type="password" id="pin" name="pin" placeholder="Pin" required>
        </div>
      `;
    } else if (selectedOption === 'option3') {
      // Add extra form fields for Option 3
      dropdownContainer.innerHTML += `
        <div class="form-group">
             <input type="text" id="treasury" name="treasury" placeholder="Treasury" required>
        </div>
        <div class="form-group">
            <input type="password" id="pin" name="pin" placeholder="Pin" required>
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
</script>

</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Dropdown Menu</title>
</head>
<body>

<!-- Dropdown Menu -->
<select id="dropdown">
  <option value="option1">Option 1</option>
  <option value="option2">Option 2</option>
  <option value="option3">Option 3</option>
  <option value="option4">Option 4</option>
</select>

</body>
</html>

