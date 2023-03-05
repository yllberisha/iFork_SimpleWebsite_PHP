function validate() { 
  var isvalid = true;
  // First name
  var firstName = document.getElementById("namef").value;
  var firstNameRegex = /^[a-zA-Z]+$/;
  // Last name
    var lastName = document.getElementById("lastnamef").value;
    var lastNameRegex = /^[a-zA-Z]+$/;
    // Address
  var address = document.getElementById("addressf").value;
  var addressRegex = /^[a-zA-Z0-9\s,'-]*$/;
  // Apt/suite
  var apt = document.getElementById("Aptf").value;
  var aptRegex = /^[a-zA-Z0-9\s,'-]*$/;
  // City
  var city = document.getElementById("cityf").value;
  var cityRegex = /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/;
  // ZIP/postal code
  var zip = document.getElementById("zipf").value;
  var zipRegex = /^\d{5}(?:[-\s]\d{4})?$/;
  // Phone number
  var phone = document.getElementById("phoneNumf").value;
  var phoneRegex = /^(\()?\d{3}(\))?[- ]?\d{3}[- ]?\d{4}$/;
  // Email address
  var email = document.getElementById("emailf").value;
  var emailRegex = /^\S+@\S+\.\S+$/;
 
  if (!firstName.match(firstNameRegex)) {
    document.getElementById("fName").innerHTML ="Please enter a valid first name";
    isvalid = false;
  }
  else{
    document.getElementById("fName").innerHTML ="";

  }

  if (!lastName.match(lastNameRegex)) {
    document.getElementById("lName").innerHTML ="Please enter a valid last name";

    isvalid = false;
  }
  else{
    document.getElementById("lName").innerHTML ="";

  }
  if (!address.match(addressRegex) || address == "") {
    document.getElementById("addressInput").innerHTML ="Please enter a valid address";

    isvalid = false;
  }
  else{
    document.getElementById("addressInput").innerHTML ="";
  }

  if (!apt.match(aptRegex) || apt == "") {
    document.getElementById("aptInput").innerHTML ="Please enter a valid apt/suite";

    isvalid = false;
  }
  else{
    document.getElementById("aptInput").innerHTML ="";

  }

  if (!city.match(cityRegex)) {
    document.getElementById("city").innerHTML ="Please enter a valid city";
    isvalid = false;
  }
  else{
    document.getElementById("city").innerHTML ="";

  }

  if (!zip.match(zipRegex)) {
    document.getElementById("zip").innerHTML ="Please enter a valid ZIP/postal code";

    isvalid = false;
  }
  else{
    document.getElementById("zip").innerHTML ="";

  }

  if (!phone.match(phoneRegex)) {
    document.getElementById("phoneNumber").innerHTML ="Please enter a valid phone number";
    isvalid = false;
  }
  else{
    document.getElementById("phoneNumber").innerHTML ="";
  }

  if (!email.match(emailRegex)) {
    document.getElementById("email").innerHTML ="Please enter a valid email address";
    isvalid = false;
  }
  else{
    document.getElementById("email").innerHTML ="";
  }
  
  if(isvalid) {

      return true;
   }
   else{
      return false;
   }
}

