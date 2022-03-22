/*
Solution for co-op coding challenge for Full Stack Software Developer Co-op position (42489)
Ghazal Mirsayyah
-------------------------------------
In this document:
1. country and provinces dynamic drop down menu generation 
2. form validation functions (only for demonstration purposes, not actually used in the form. Explanation in the comments.)
*/

// ----------------------------------
// Country and provinces dropdown menus

let canadianProvinces = ["Alberta", "British Columbia", "Manitoba", "New Brunswick", "Newfoundland and Labrador", "Nova Scotia", "Ontario", "Prince Edward Island", "Quebec", "Saskatchewan"];
let usStates = ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"];
let provinceDropDown = document.getElementById("province");
let country = document.getElementById("country");

// function to generate dropdown options
function generateProvinceOptions(provinces) {
  for (const val of provinces) {
    var option = document.createElement("option");
    option.value = val;
    option.text = val;
    provinceDropDown.appendChild(option);
  }
}
// generating default dropdown, set to canada
generateProvinceOptions(canadianProvinces);

// function to change the province dropdown menu based on country menu
function changeCountry() {
  provinceDropDown.innerHTML = "";
  if (country.value === "CA") { generateProvinceOptions(canadianProvinces); } else { generateProvinceOptions(usStates); }
}
// ----------------------------------
// Form validation functions
/* IMPORTANT:
I actually have not used any of these functions with the form, and instead
have used HTML's standard pattern matching and string length validation, as
it is what I would do normally. I only wrote these functions to demonstrate 
how I would do the front-end validation with JavaScript.
*/
let email = document.getElementById("email");
let phone = document.getElementById("phoneNumber");

// Function to validate the whole form.
function validateForm() {
  ValidateEmail(email);
  ValidatePhoneNum(phone);
}

/* function to validate a specific email address.
Example of valid format: something@something.com
*/
function ValidateEmail(input) {
  let validFormat = new RegExp('[a-Z0-9]+@[a-Z]+.[a-z]{2,3}');
  if (validFormat.test(input)) {
    alert("Valid email!");
    return true;
  }
  else {
    alert("Invalid email!");
    return false;
  }
}

// checks to see if the entered phone number is valid. (i.e: has 10 digits)

function ValidatePhoneNum(input) {
  let validFormat = new RegExp('[0-9]{10}');
  if (validFormat.test(input)) {
    alert("Valid phone number!");
    return true;
  }
  else {
    alert("Invalid phone number!");
    return false;
  }
}