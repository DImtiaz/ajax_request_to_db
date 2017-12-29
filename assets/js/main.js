// SELECTING ALL TEXT ELEMENTS
var firstname = document.forms['validationForm']['fname'];
var mobileno = document.forms['validationForm']['mobileno'];
var email = document.forms['validationForm']['email'];
var address = document.forms['validationForm']['address']

// SELECTING ALL ERROR DISPLAY ELEMENTS
var firstname_error = document.getElementById('firstname_error');
var mobileno_error = document.getElementById('mobileno_error');
var email_error = document.getElementById('email_error');
var addrerss_error = document.getElementById('address_error');
// SETTING ALL EVENT LISTENERS

// validation function
function validation() {
  // validate username
        if (firstname.value == "") {
          firstname.style.border = "1px solid red";
          document.getElementById('firstname').style.color = "red";
          firstname_error.textContent = "firstname is required";
          firstname.focus();
          return false;
        }
        // validate username
        if (firstname.value.length < 3) {
          firstname.style.border = "1px solid red";
          document.getElementById('firstname').style.color = "red";
          firstname_error.textContent = "Name must be at least 3 characters";
          firstname.focus();
          return false;
        }
  //validate mobileno
        if (mobileno.value == "") {
          mobileno.style.border = "1px solid red";
          document.getElementById('mobileno').style.color = "red";
          mobileno_error.textContent = "Mobile Number is required";
          mobileno.focus();
          return false;
        }
        // validate username
        if (mobileno.value.length < 3) {
          mobileno.style.border = "1px solid red";
          document.getElementById('mobileno').style.color = "red";
          mobileno_error.textContent = "Number must be at least 11 characters";
          mobileno.focus();
          return false;
        }

          // validate email
          if (email.value == "") {
            email.style.border = "1px solid red";
            document.getElementById('email').style.color = "red";
            email_error.textContent = "Email is required";
            email.focus();
            return false;
          }
         
        if(address.value == ""){
          address.style.border = "1px solid red";
          document.getElementById('address').style.color = "red";
          address_error.textContent = "Enter Address";
          address.focus();
          return false;
        }
        if(address.includes("House")){
          address.style.border = "1px solid red";
          document.getElementById('address').style.color = "red";
          address_error.textContent = "Address Must Include House Number";
          address.focus();
          return false;
        }
}


  


