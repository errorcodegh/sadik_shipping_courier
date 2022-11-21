<?php
$connection =mysqli_connect("localhost","root","","register");
$getdata =mysqli_select_db($connection,"register");
?>

<?php

$fname = $lname = $phone = $company = $streetcode = $postalcode = $city = $country = $email =         $password ="";

$fnamerr = $lnamerr = $phonerr = $companyrr = $streetcoderr = $postalcoderr = $cityrr = $countryrr = $emailrr = $passwordrr ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(!empty($_POST["fname"])){
		$fname = $_POST["fname"];
	}

	else {
		$fnamerr = "invalid";
	}


	if(!empty($_POST["lname"])){
		$lname = $_POST["lname"];
	}
	else {
		$lnamerr = "invalid";
	}


	if(!empty($_POST["phone"])){
		$phone = $_POST["phone"];
	}
	else {
		$phonerr = "invalid";
	}



	if(!empty($_POST["com"])){
		$company = $_POST["com"];
	}
	else {
		$companyrr = "invalid";
	}


	if(!empty($_POST["stcode"])){
		$streetcode = $_POST["stcode"];
	}
	else {
		$streetcoderr = "invalid";
	}



	if(!empty($_POST["ps"])){
		$postalcode = $_POST["ps"];
	}
	else {
		$postalcoderr = "invalid";
	}



	if(!empty($_POST["city"])){
		$city = $_POST["city"];
	}
	else {
		$cityrr = "invalid";
	}



	if(!empty($_POST["cout"])){
		$country = $_POST["cout"];
	}
	else {
		$countryrr = "invalid";
	}



	if(!empty($_POST["emm"])){
		$email = $_POST["emm"];
	}
	else {
		$emailrr = "invalid";
	}



	if(!empty($_POST["pss"])){
		$password = $_POST["pss"];
	}
	else {
		$passwordrr = "invalid";
	}


$sql = "INSERT INTO registable(firstname,lastname,phone,company,streetcode,postalcode,city,country,email,password) VALUES('$fname','$lname','$phone','$company','$streetcode','$postalcode','$city','$country','$email','$password')";

$result = mysqli_query($connection,$sql);

}



?>



<!DOCTYPE html>
<html>
<head><title>THE REGISTERS PAGE</title>
<style>

#registerpage{
	background: none;
	width: 60%;
	height: auto;
	line-height:  20px;
}

.img{
	position: relative;
	width: 100%;
	height:  5em;
	display: none;
}

.creden {
	float: right;
	margin-right: 170px;
	width: 350px;
	height:  25px;
	text-align:  center;
	text-transform: capitalize;

}

.creden:hover {
	background: silver;
}

label{
	line-height: 10px;
	color:  white;
	text-shadow: 1px 1px 3px black;
}

legend{
	font-weight:  bold;
	color:  whitesmoke;
	text-shadow: 2px 2px 2px black;
}

#sub3{
	position: relative;
	bottom: 50px;
	left: 85%;
	color:  silver;
	text-shadow:  1px 1px 1px black;
	font-size: 20px;
}

.error{
	color: red;
}








</style>
</head>
<body>

	<div id="registerpage">
		<form action="register.php" method="POST">
			<fieldset>
				<legend>PERSONAL INFO</legend>
			<label for="firstname">FIRSTNAME</label><br>
			<input type="text" name="fname" id="fn" class="creden" placeholder="firstname" value="<?php echo $fname; ?>">
			<span class="error">*<?php echo $fnamerr; ?><span/><br>

			<label for="lastname">LASTNAME</label><br>
			<input type="text" name="lname" id="ln" class="creden" placeholder="lastname" value="<?php echo $lname; ?>"><span class="error">*<?php echo $lnamerr; ?><span/><br>

			<label for="phone">PHONE</label><br>
			<input type="text" name="phone" id="ps" class="creden" placeholder="enter phone" value="<?php echo $phone; ?>">
			<span class="error">*<?php echo $phonerr; ?><span/><br>
             </fieldset>


            <fieldset>
            	<legend>COMPANY DETAILS</legend>
			<label for="company">COMPANY</label><br>
			<input type="text" name="com" id="cm" class="creden" placeholder="company name" value="<?php echo $company; ?>"><span class="error">*<span/><?php echo $companyrr; ?><br>

			<label for="street code">STREET CODE</label><br>
			<input type="text" name="stcode" id="stc" class="creden" placeholder="street code" value="<?php echo $streetcode; ?>"><span class="error">*<span/><?php echo $streetcoderr; ?><br>

			<label for="postalcode">POSTAL CODE</label><br>
			<input type="text" name="ps" id="pc" class="creden" placeholder="postal code" value="<?php echo $postalcode; ?>"><span class="error">*<span/><?php echo $postalcoderr; ?><br>

			<label for="city">CITY</label><br>
			<input type="text" name="city" id="ct" class="creden" placeholder="enter city" value="<?php echo $city; ?>"><span class="error">*<span/><?php echo $cityrr; ?><br>

			<label for="country">COUNTRY</label><br>
			<input type="text" name="cout" id="cont" class="creden" placeholder="enter phone" value="<?php echo $country; ?>"><span class="error">*<span/><?php echo $countryrr; ?><br>
             </fieldset>


            <fieldset>
            	<legend>MY ACCOUNT</legend>
			<label for="email">EMAIL</label><br>
			<input type="email" name="emm" id="em" class="creden" placeholder="enter email" value="<?php echo $email; ?>"><span class="error">*<span/><?php echo $emailrr; ?><br>

			<label for="password">PASSWORD</label><br>
			<input type="text" name="pss" id="ps" class="creden" placeholder="password here" value="<?php echo $password; ?>"><span class="error">*<span/><?php echo $passwordrr; ?><br>
			</fieldset>

			<input type="submit" name="submit" id="sub3" value="submit">
			
</form>
</div>
</div>
</body>
</html>