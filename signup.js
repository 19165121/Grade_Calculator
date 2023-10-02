function validateForm() {
  var name = document.forms["signup-form"]["name"].value;
  var student_id = document.forms["signup-form"]["student_id"].value;
  var password = document.forms["signup-form"]["password"].value;
  var confirm_password = document.forms["signup-form"]["confirm_password"].value;

  // Validate password
  if (password != confirm_password) {
    alert("Passwords do not match");
    return false;
  }

  // Validate password
  var password_regex = /^(?=.*\d)(?=.*[!@#$%^&*()])(?=.*[a-z])(?=.*[A-Z]).{8,20}$/;
  if (!password_regex.test(password)) {
    alert("Password must be between 8 and 20 characters long and include at least one uppercase letter, one lowercase letter, one symbol, and one number");
    return false;
  }

  // Validate student ID starts with 19
  if (!student_id.startsWith("1")) {
    alert("Please enter a real Oxford Brookes Student ID");
    return false;
  }

  // Validate student ID has 8 digits
  if (student_id.length != 8) {
    alert("Please enter a real Oxford Brookes Student ID");
    return false;
  }

  return true;
}
