<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<div id="wrapper">
		<form method="POST"  action="index.php" onsubmit="return validation()" name="validationForm">
		<h6>* Required Fields</h6>
		<div id="firstname">
			Firstname :* <br>
		    <input type="text" name="fname" placeholder="Firstname" class="inputField"> 
			<div id="firstname_error"></div>
		</div>

			Lastname  : <br>
			 <input type="text" name="lname" placeholder="Lastname" class="inputField"> <br>

		<div id="mobileno">
			Mobile Number :* <br> <input type="number" name="mobileno" placeholder="Input Mobile Number" class="inputField">
			<div id="mobileno_error"></div>
		</div>

		<div id="address">
			Address :* <br> <input type="text" name="address" placeholder="Input Address" class="inputField">
			<div id="address_error"></div>
		</div>

		
		<div id="email">
			E-Mail    :* <br>
		    <input type="email" name="email" placeholder="Input E-mail address" class="inputField"> 
			<div id="email_error"></div>
		</div>
		<br>

		<input type="submit" name="submit" value="Submit" class="btn">
	</form>
	</div>

	

	<!-- custom javascript -->
	<script src="assets/js/main.js">
		
	</script>
</body>
</html>