<?php
$connection = mysqli_connect("localhost","root","","customerdata");
$getdata = mysqli_select_db($connection,"cutomerdata");


$firstname  = $email = $telephone = $message ="";
$firstnamerr  = $emailrr = $telephonerr = $messagerr ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(!empty($_POST["ffname"])){
		$firstname = $_POST["ffname"];
	}
	else {
		$firstnamerr = "error";
	}

	if(!empty($_POST["eemail"])){
		$email = $_POST["eemail"];
	}
	else {
		$emailrr = "error";
	}

	if(!empty($_POST["tell"])){
		$telephone = $_POST["tell"];
	}
	else {
		$telephonerr = "error";
	}

	if(!empty($_POST["msg"])){
		$message = $_POST["msg"];
	}
	else {
		$messagerr = "error";
	}

$sql = "INSERT INTO customertable(firstname,email,telephone,message) VALUES('$firstname','$email','$telephone','$message')";
$result = mysqli_query($connection,$sql);

}
?>


<?php
$connection1 =mysqli_connect("localhost","root","","complain");
$getdata =mysqli_select_db($connection1,"complain");


$firstname  = $email = $telephone = $message ="";
$firstnamerr  = $emailrr = $telephonerr = $messagerr ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(!empty($_POST["ffname"])){
		$firstname = $_POST["ffname"];
	}
	else {
		$firstnamerr = "error";
	}

	if(!empty($_POST["eemail"])){
		$email = $_POST["eemail"];
	}
	else {
		$emailrr = "error";
	}

	if(!empty($_POST["tell"])){
		$telephone = $_POST["tell"];
	}
	else {
		$telephonerr = "error";
	}

	if(!empty($_POST["msg"])){
		$message = $_POST["msg"];
	}
	else {
		$messagerr = "error";
	}

$sql1 = "INSERT INTO complaintable(firstname,email,telephone,message) VALUES('$firstname','$email','$telephone','$message')";
$result = mysqli_query($connection1,$sql1);

}
?>




<!DOCTYPE html>
<html>
<head><title>CONTACT DEVTRACO SHIPPING</title>
<style>
	#contactus {
		background: none;
		width:  40%;
		height:  400px;
		margin: 100px 50px;
		
	}

	#complaint{
		background: none;
		position: absolute;
		top: 100px;
		right:  50px;
		width:  40%;
		height:  400px;
	}

	h2{
		text-align: center;
		color:  silver;
		text-shadow:  2px 2px 2px black;
		padding: 10px;
	}

	h1{
		position: absolute;

	}

	label {
		padding: 20px 40px;
		font-weight:  bold;
		line-height: 50px;
		color:  silver;
		text-shadow:  2px 2px 2px black;
	}

	.cred,.cred1{
		float: right;
		margin-right: 30px;
		width: 300px;
		height: 30px;
		line-height: 20px;
		text-align:  center;
		text-transform: capitalize;

	}

.cred1:hover{
	background-color: silver;
}

.cred:hover{
	background-color: silver;
}

#sub,#subb {
	color:  silver;
	text-shadow:  2px 2px 2px black;
	position: relative;
	bottom:  0px;
	left:  20px;
	font-size: 20px;
}

#ms{
	height: 80px;
}

h1 {
	animation: mymove 5s infinite;
	position: absolute;
	top: 10px;
	left:  400px;
	text-align:  center;
	color:  silver;
	text-shadow: 1px 1px 1px silver;
	font-weight:  bold;
}

@keyframes mymove {
  50% {word-spacing: 70px;}
}

.error{
	color:  red;
}


</style>
</head>
<body>
  
  <div id="contactus">
  	<h1>DEVTRACO SHIPPING LIMITED</h1>
  <h2>CONTACT CUSTOMER SERVICE</h2>
  <form action="https://formsubmit.co/rans76boat@gmail.com" method="POST" />
  <input type="hidden" name="_next" value="http://www.google.com">
  <input type="hidden" name="_captcha" value="false">
  <input type="hidden" name="_subject" value="welcome to devtraco">
  <input type="hidden" name="_cc" value="another@email.com,yetanother@email.com">
  <input type="hidden" name="_autoresponse" value="devtraco shipping has approve your order">
  <input type="hidden" name="_template" value="table">
  	<label for="firstname">FIRSTNAME</label>
  	<input type="text" name="ffname" id="fn" class="cred" placeholder="enter name" value="<?php echo $firstname; ?>"><span class="error">*<?php  $firstnamerr; ?></span><br><br>

  	<label for="email">EMAIL</label>
  	<input type="text" name="eemail" id="em" class="cred" placeholder="enter email" value="<?php echo $email; ?>"><span class="error">*</span><?php  $emailrr; ?><br><br>

  	<label for="telephone">TELEPHONE</label>
  	<input type="text" name="tell" id="tl" class="cred" placeholder="enter telephone" value="<?php echo $telephone; ?>"><span class="error">*</span><?php  $telephonerr; ?><br><br>

  	<label for="message">MESSAGE</label>
  	<input type="text" name="msg" id="ms" class="cred" placeholder="message here" value="<?php echo $message; ?>"><span class="error">*</span><?php $messagerr; ?><br><br>

  	<input type="submit" name="submit" id="sub" value="submit">

     </div>

   <div id="complaint">
  <h2>MAKE A COMPLAINT HERE</h2>
  <form action="contactus.php" name="complaint" method="POST">
  	<label for="firstname">FIRSTNAME</label>
  	<input type="text" name="fffname" id="fn" class="cred1" placeholder="enter name"
  	value="<?php echo $firstname; ?>"><span class="error">*<?php $firstnamerr; ?></span><br><br>

  	<label for="email">EMAIL</label>
  	<input type="text" name="eeemail" id="em" class="cred1" placeholder="enter email"
  	value="<?php echo $email; ?>"><span class="error">*<?php  $emailrr; ?><br><br>

  	<label for="telephone">TELEPHONE</label>
  	<input type="text" name="ttell" id="tl" class="cred1" placeholder="enter telephone"
  	value="<?php echo $telephone; ?>"><span class="error">*<?php  $telephonerr; ?><br><br>

  	<label for="message">MESSAGE</label>
  	<input type="text" name="mmsg" id="ms" class="cred1" placeholder="message here"
  	value="<?php echo $message; ?>"><span class="error">*<?php $messagerr; ?><br><br>

  	<input type="submit" name="submit" id="subb" value="submit">

     </div>

   </form>
	</body>
	</html>