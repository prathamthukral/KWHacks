<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="C:/Users/prath/Pictures/doctor_icon.jpg" />
	<title>Patient's info</title>










	<script src="https://gist.github.com/nathansmith/4ff5887ecd9f452b3a92.js"></script>
	









	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<meta charset=utf-8 />

	<script src="js\formfunctions.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/formStyles.css">
</head>
<body>
	<!--Navbar-->
	<nav class='navbar navbar-default'>
		<div class="navbar-header">
			<ul class="nav navbar-nav">
        		<li class="active"><a href="#">Form<span class="sr-only">(current)</span></a></li>
        		<li><a href="html/aboutPage.html">About</a></li>
        	</ul>
		</div>
	</nav>

	<h1>Patient's Information:</h1>
	<form action="patientadded.php" method="post">
		<b>Add a New Patient</b>

		<label>First Name:</label><br/>
		<input type="text" name="first_name" size="30" value="" />

		<label>Last Name:</label><br/>
		<input type="text" name="last_name" size="30" value="" />

		<label>Email:</label><br/>
		<input type="text" name="email" size="30" value="" />

		<label>Street:</label><br/>
		<input type="text" name="street" size="30" value="" />

		<label>City:</label><br/>
		<input type="text" name="city" size="30" value="" />

		<label>Province (2 Characters):</label><br/>
		<input type="text" name="state" size="30" maxlength="2" value="" />

		<label>Zip Code:</label><br/>
		<input type="text" name="zip" size="30" maxlength="6" value="" />

		<label>Phone Number:</label><br/>
		<input type="text" name="phone" size="30" value="" />

		<label>Birth Date (YYYY-MM-DD):</label><br/>
		<input type="text" name="birth_date" size="30" value="" />

		<label>Sex (M or F):</label><br/>
		<input type="text" name="sex" size="30" maxlength="1" value="" />

		<label>Height:</label><br/>
		<input type="text" name="height" size="30" value="" />

		<label>Weight:</label><br/>
		<input type="text" name="weight" size="30" value="" />
		
		<label>Health Card #:</label><br/>
		<input type="text" name="health_card" size="30" value="" />
		
		<label>Submit</label>
		<input type="submit" name="submit" value="Send" />


		<label for="">Upload a clear image of your face:</label><br/>
		<input type='file' name="input" onchange="readURL(this);"/>
    	<img id="preview" src="#" alt="Upload your image! (only png, jpg, or gifs!)" style="color: red;" /><br/>
		

		<input type="submit" name="submit" value="send">
		
    	
	</form>

	<!--<button onclick="dataFunction()">Submit</button>-->
	<p id="instructions">Check the 'console' to see the results. Right click, and press inspect</p>
</body>
</html>
