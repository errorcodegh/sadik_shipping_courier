<?php 
$connection = mysqli_connect("localhost","root","","test");
$database = mysqli_select_db($connection,"test");
if(!$connection){
  echo "data not establish";
}

$fullname = $email = $telephone = $address = $country = $city = $zipcode = $product = $date = $tracking = $weight = $duration = $courier = $card = $recievername = $recieveradd = $recieveremail = $rcountry = $rtelephone = $status = ""; 

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(!empty($_POST["fullname"])){
    $fullname = $_POST["fullname"];
  }

  if(!empty($_POST["email"])){
    $email = $_POST["email"];
  }

  if(!empty($_POST["telephone"])){
    $telephone = $_POST["telephone"];
  }

  if(!empty($_POST["address"])){
    $address = $_POST["address"];
  }

  if(!empty($_POST["country"])){
    $country = $_POST["country"];
  }

  if(!empty($_POST["city"])){
    $city = $_POST["city"];
  }

  if(!empty($_POST["zipcode"])){
    $zipcode = $_POST["zipcode"];
  }

  
  if(!empty($_POST["product"])){
    $product = $_POST["product"];
  }


  if(!empty($_POST["weight"])){
    $weight = $_POST["weight"];
  }


  if(!empty($_POST["duration"])){
    $duration = $_POST["duration"];
  }


  if(!empty($_POST["courier"])){
    $courier = $_POST["courier"];
  }

  if(!empty($_POST["rname"])){
    $recievername = $_POST["rname"];
  }

  if(!empty($_POST["radd"])){
    $recieveradd = $_POST["radd"];
  }

  if(!empty($_POST["remail"])){
    $recieveremail = $_POST["remail"];
  }

  if(!empty($_POST["recount"])){
    $rcountry = $_POST["recount"];
  }

  if(!empty($_POST["tele"])){
    $rtelephone = $_POST["tele"];
  }

  if(!empty($_POST["datee"])){
    $date = $_POST["datee"];
  }

  if(!empty($_POST["track"])){
    $tracking = $_POST["track"];
  }

  if(!empty($_POST["card"])){
    $card = $_POST["card"];
  }

  if(!empty($_POST["status"])){
    $status = $_POST["status"];
  }

  if(!empty($_POST["submit"])){

  $fullname = $_POST["fullname"];
  $country = $_POST["country"];
  $city = $_POST["city"];
  $telephone = $_POST["telephone"];
  $toEmail = $_POST["rans76boat@gmail.com"];

  $mailHeaders = "name: " . $fullname .
  "\r\n country: " . $country .
  "\r\n city: " . $city .
  "\r\n telephone: " . $telephone . "\r\n";
}

$sql = "INSERT INTO testtable(fullname,email,telephone,address,country,city,zipcode,datee,tracking_code,product,weight,duration,courier,clientid,client_name,client_address,client_email,client_country,client_telephone,status) VALUES('$fullname','$email','$telephone','$address','$country','$city','$zipcode','$date','$tracking','$product','$weight','$duration','$courier','$card','$recievername','$recieveradd','$recieveremail','$rcountry','$rtelephone','$status')";
$result = mysqli_query($connection,$sql);
if($result){
  header("location: registerindex.php");
}
     
}

?>



<!DOCTYPE html>
<html>
<head><title>THE TEST</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <meta name="viewport" content="width=device-width,scalable=no">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 
<style>

.container{
  background:  whitesmoke;
  position:  absolute;
  width: 100%;
  height: auto;
  display: flex;
  line-height:  60px;
}

.con3,.con2,.con1{
  width: 20%;
  height:  auto;
  float:  right;
 margin-right: 7em;
}

.all{
  width:  200px;
  height: 30px;
  border-radius: 1em;
  font: 700 15px system-ui;
}

h2{
   font: 700 30px system-ui;
}

#ssub{
  font: 700 15px system-ui;
  position:  absolute;
  right:  10em;
  bottom:  2em;
}


@media all and (max-width: 580px){

.container{
  background:  whitesmoke;
  position:  absolute;
  width: 100%;
  height: auto;  
  line-height:  60px;
}

.con3,.con2,.con1{
  width: 60%;
  height: auto;
  display: inline-block;
}

#ssub{
  font: 700 15px system-ui;
  position:  absolute;
  right:  2em;
  bottom:  2em;
}













}




</style>
</head>
<body>
<div class="container">
<form name="testform" method="POST" action="registerorder.php">

<div class="con1">
  <h2>RECIEVER</h2>
   <input placeholder="name of reciever" name="rname" class="all" required><br>
    <input placeholder="reciever address" name="radd" class="all" required><br>
    <input placeholder="reciever email" name="remail" class="all" required><br>
   <input placeholder="reciever location/country" name="recount" class="all" required><br>
    <input placeholder="reciever telephone" name="tele" class="all" required><br>
    <input placeholder="ID card number" name="card" required class="all"><br>
    
  
</div>

<div class="con2">
  <h2>PACKAGE</h2>
    <input type="date" name="datee" required>
    <input placeholder="enter 4digit tracking number" name="track" required>

    <select name="status">
      <option value="pending">PENDING</option>
      <option value="approved" id="app" hidden>APPROVAL</option>
    </select>

    <SELECT  name="product" class="all">
     <option value="type of product">TYPE OF PRODUCT</option>
     <option value="parcel">PARCEL</option>
     <option value="document">DOCUMENT</option> 
     <option value="BOX OF GOODS">BOX OF GOODS</option>   
     <option value="GOODS">GOODS</option>    
     <option value="HEAVY GOODS">HEAVY GOODS</option>    
     <option value="OTHERS">OTHER</option>    
    </SELECT><br>

     <SELECT name="weight" class="all">
     <option value="weight of product">WEIGHT OF PRODUCT</option>
     <option value="1KG_5KG">1KG - 5KG</option>    
     <option value="5KG_10KG">5KG - 10KG</option>    
     <option value="10KG_25KG">10KG - 25KG</option>    
     <option value="25KG_35KG">25KG - 35KG</option>    
     <option value="35KG_50KG">35KG - 5OKG</option>    
     <option value="OTHERS">OTHERS</option>    
    </SELECT><br>

    <SELECT name="duration" class="all">
     <option value="DELIVERY DURATION">DELIVERY DURATION</option>
     <option value="2_4DAYS">2-4DAYS EXPRESS</option>    
     <option value="5_7DAYS">2-7DAYS</option>    
     <option value="1_3DAYS MORDEN">1-3DAYS MORDEN</option>    
     <option value="7 DAYS MAX">7DAYS MAX</option>    
     <option value="3WEEKS MAX">2WEEKS MAX</option>    
     <option value="OTHERS">OTHERS</option>    
    </SELECT><br>

    <SELECT name="courier" class="all">
     <option value="courier type">COURIER TYPE</option>
     <option value="COURIER BY SHIPPING">COURIER BY SHIPPING</option>    
     <option value="COURIER BY TRAIN">COURIER BY TRAIN</option>    
     <option value="COURIER BY VEHICLE">COURIER BY VEHICLE</option>    
     <option value="COURIER BY AIRPLANE">COURIER BY AIRPLANE</option>    
     <option value="OTHERS">OTHER</option>       
    </SELECT>
</div>

<div class="con3">
  <h2>SENDER</h2>
<input type="text" placeholder="name here" name="fullname" class="all"><br>
<input type="text" placeholder="email here" name="email" class="all"><br>
<input type="text" placeholder="telephone here" name="telephone" class="all"><br>
<input type="text" placeholder="address" name="address" class="all"><br>
<input type="text" placeholder="country" name="country" class="all"><br>
<input type="text" placeholder="city" name="city" id="ct" class="all"><br>
<input type="text" placeholder="zip code" name="zipcode" class="all"><br>  
    </div>
    <input type="submit" name="submit" id="ssub" value="submit">
</form>
</div>

  </body>
  </html>