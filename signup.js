function validateForm() {
    var Fname = prompt("Enter your full name:");
    var Uame = prompt("Enter your username:");
    var Pass = prompt("Enter your password:");
    var Cpass = prompt("Confirm your password:");
    var Gender = prompt("Enter your gender (Male/Female):");
    var pnum = prompt("Enter your phone number:");
    var Eid = prompt("Enter your email address:");
    var State = prompt("Enter your state:");
    var Agree = prompt("Agree to terms and conditions (Yes/No):");
  
    if (!isValidFullName(Fname)) {
      alert("Please enter a valid full name");
      return false;
    }
  
    if (!isValidUsername(Uname)) {
      alert("Please enter a valid username (alphanumeric)");
      return false;
    }
  
    if (!isValidPassword(Pass)) {
      alert("Please enter a valid password");
      return false;
    }
  
    if (password !== Cpass) {
      alert("Passwords do not match");
      return false;
    }
  
    if (!isValidGender(Gender)) {
      alert("Please enter a valid gender (Male/Female)");
      return false;
    }
  
    if (!isValidPhone(pnum)) {
      alert("Please enter a valid phone number (10 digits)");
      return false;
    }

    if (!isValidEmail(Eid)) {
      alert("Please enter a valid email address");
      return false;
    }
  
    if (!isValidState(State)) {
      alert("Please enter a valid state");
      return false;
    }
  
    if (!isValidAgreement(Agrees)) {
      alert("You must agree to the terms and conditions");
      return false;
    }
  
    alert("Signup successful! Redirecting to Login page...");

  }
  
  validateForm();