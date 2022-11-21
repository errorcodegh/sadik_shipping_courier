<?php 
$connection = mysqli_connect("localhost","root","","paymentform");
$data = mysqli_select_db($connection,"paymentform");

$firstname = $email = $address = $city = $state = $zipcode = $cardname = $cardnum = $expirem = $expirey = $cvv = $telephone = "" ;
$firstnamerr = $emailrr = $addressrr = $cityrr = $staterr = $zipcoderr = $cardnamerr = $cardnumrr = $expiremrr = $expireyrr = $cvvrr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(!empty($_POST["firstname"])){
		$firstname = $_POST["firstname"];
	}

	else{
    $firstnamerr = "invalid";
	}

	if(!empty($_POST["email"])){
		$email = $_POST["email"];
	}

	else{
		$emailrr = "invalid";
	}

  if(!empty($_POST["address"])){
$address = $_POST["address"];
  }

else{
 $addressrr = "invalid";
}

  if(!empty($_POST["city"])){
$city = $_POST["city"];
  }

else{
 $cityrr = "invalid";
}

  if(!empty($_POST["state"])){
$state = $_POST["state"];
  }

else{
 $staterr = "invalid";
}


  if(!empty($_POST["zip"])){
$zipcode = $_POST["zip"];
  }

else{
 $zipcoderr = "invalid";
}

 if(!empty($_POST["cardname"])){
$cardname = $_POST["cardname"];
  }

else{
 $cardnamerr = "invalid";
}


  if(!empty($_POST["cardnumber"])){
$cardnum = $_POST["cardnumber"];
  }

else{
 $cardnumrr = "invalid";
}


  if(!empty($_POST["expmonth"])){
$expirem = $_POST["expmonth"];
}

else{
 $expiremrr = "invalid";
}

  if(!empty($_POST["expyear"])){
$expirey = $_POST["expyear"];
  }

else{
 $expireyrr = "invalid";
}


  if(!empty($_POST["cvv"])){
$cvv = $_POST["cvv"];
  }

else{
 $cvvrr = "invalid";
}

if(!empty($_POST["telephone"])){
$telephone = $_POST["telephone"];
  }

  else{
 $telephonerr = "invalid";
}






	$sql = "INSERT INTO payformtable(firstname,email,address,city,state,telephone,zipcode,cvv_number,card_name,expire_month,expire_year,credit_numder) VALUES('$firstname','$email','$address','$city','$state','$telephone','$zipcode','$cvv','$cardname','$expirem','$expirey','$cardnum')";

	$result = mysqli_query($connection,$sql);
  if(!$result){
      echo "not send";
  }

else {
   header("location: end.php");
}

}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

#track{
  position: relative;
  top: 100px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

#track{
  position: absolute;
  top: 200px;
  right: 100px;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="payment.php" name="payform" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">
            <label for="">TELEPHONE</label>
            <input type="text" name="telephone" id="tel">
          
            

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        
    </div>
  </div>
  <input type="submit" value="submit" name="submit" class="btn">
</form>
</div>

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
