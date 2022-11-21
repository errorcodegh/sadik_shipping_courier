<?php 
$connection = mysqli_connect("localhost","root","","signup");
$data = mysqli_select_db($connection,"signup");
if(!$data){
  echo "database not established";
}

$email = $password = $confirm = "";

if(isset($_POST["submit"])){

if(!empty($_POST["email"])){
$email = $_POST["email"];
}

if(!empty($_POST["psw"])){
$password = $_POST["psw"];  
}

if(!empty($_POST["repeat"])){
$confirm = $_POST["repeat"];  
}

$sql = "INSERT INTO signuptable(email,password,confirm) VALUES('$email','$password','$confirm')";
$result = mysqli_query($connection,$sql);
if($result){
  header("location: shipping.php");
}
}

?>

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}



/* Float cancel and signup buttons and add an equal width */
.signupbtn {
  float: right;
  width: 10%;
  height: 50px;
  margin: 20px 20px;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


</style>
<body>

<form action="https://formsubmit.co/rans76boat@gmail.com" method="POST" style="border:1px solid #ccc">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" value="<?php echo $password; ?>" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="repeat" value="<?php echo $confirm; ?>" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      <input type="submit" class="signupbtn" name="submit" value="submit">

</form>

<script>
;(function() {
var randomString = function(length) {
var text = "";
var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
for(var i = 0; i < length; i++) {
text += possible.charAt(Math.floor(Math.random() * possible.length));
}
return text;
}
// random string length
var random = randomString(10);
// insert random string to the field
loader.engine.document.getElementById(95464968).setValue(({"value": random}));
})();
</script>

</body>
</html>
