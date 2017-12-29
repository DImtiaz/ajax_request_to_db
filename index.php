<!DOCTYPE html>
<html>
   <head>
      <title>Validation</title>
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   </head>
   <body>
      <div id="wrapper">
         <form method="POST"  action="index.php" onsubmit="return validation()" name="validationForm" class="ajax">
            <h6>* Required Fields</h6>
            <div id="firstname">
               Firstname :* <br>
               <input type="text" name="fname" placeholder="Firstname" class="inputField" id="name1"> 
               <div id="firstname_error"></div>
            </div>
            Lastname  : <br>
            <input type="text" name="lname" placeholder="Lastname" class="inputField" id="name2"> <br>
            <div id="mobileno">
               Mobile Number :* <br> <input type="number" name="mobileno" placeholder="Input Mobile Number" class="inputField" id="mobile">
               <div id="mobileno_error"></div>
            </div>
            <div id="address">
               Address :* <br> <input type="text" name="address" placeholder="Input Address" class="inputField" id="address">
               <div id="address_error"></div>
            </div>
            <div id="email">
               E-Mail    :* <br>
               <input type="email" name="email" placeholder="Input E-mail address" class="inputField" id="email"> 
               <div id="email_error"></div>
            </div>
            <br>
            <input type="submit" name="submit" value="Submit" class="btn">
         </form>
      </div>
      <script src="assets/js/index.js"></script>
      <!-- custom javascript -->
      <script src="assets/js/main.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){  
         $("#submit").click(function(){
         var firstname = $("#name1").val();
         var lastname = $("#name2").val();
         var mobileno = $("#mobile").val();
         var address = $("#address").val();
         var email = $("#email").val();
         
         
         // Returns successful data submission message when the entered information is stored in database.
         var dataString = 'Firstname='+ firstname + '&Lastname='+ lastname + '&MobileNo='+ mobileno + '&Address='+ address + '&email=' + email ;
         
         
         
         //AJAX code to submit form.
         $.ajax({
         	type: "POST",
         	url: "",
         	data: dataString,
         	cache: false,
         	success: function(result){
         						alert(result);
         							}
         });
         
         return false;
         });
         });
      </script>
      </script>
   </body>
</html>