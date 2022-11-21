<?php
session_start();
$connection = mysqli_connect("localhost","root","","test");
$database = mysqli_select_db($connection,"test");

$id=$_SESSION['id'];
$sql="SELECT * FROM testtable WHERE id='$id'";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result);

 ?>




<!DOCTYPE html>
<html>
<head><title>YOUR ORDER HAS BEEN CONFIRMED</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
*{
margin:  0px;
padding:  0px;
border:  0px;
}

body{
	background: whitesmoke;
}

#conf{
	position: absolute;
	top:  0px;
	right: 10px;
	text-shadow: 1px 1px 1px whitesmoke;
	 font: 300 20px system-ui;
}

#conff{
	position: absolute;
	top:  40px;
	right: 10px;
	text-shadow: 1px 1px 1px whitesmoke;
	 font: 300 20px system-ui;
}

#cf{
	text-shadow: 1px 1px 1px whitesmoke;
	 font: 300 20px system-ui;
}

#or{
	style="color:black;
	 text-shadow: 1px 1px 1px whitesmoke;
	  font: 300 30px system-ui;
}
#fa{
	font-size: 80px;
	animation: mymove 3s infinite;
}


@keyframes mymove {
  50% {color: black;
  	color: gold;
  }
  
  }

#nm{
  	color:black;
	 text-shadow: 1px 1px 1px whitesmoke;
	  font: 500 30px system-ui;
  }

  #conf1{
  	margin-top: 0px;
  	margin-left: 10px;
  	text-shadow: 1px 1px 1px whitesmoke;
	 font: 300 1em system-ui;
  }

  #ss{
text-shadow: 1px 1px 1px whitesmoke;
	 font: 300 20px system-ui;
  }

  #cntdiv {
  	display: flex;
  	line-height: 30px;
    border-bottom: 1px solid red;

  }

  #cnt,#cnt1 {
  	margin: 40px auto;

  }

  #cc{
  	text-shadow: 1px 1px 1px whitesmoke;
	 font: 700 20px system-ui;
  }

  #top{
  	position:  absolute;
  	top:  10px;
  	left: 10px;
	line-height: 30px;

  }

    #word{
	animation: mymove 5s infinite;
	color:  silver;
	text-shadow: 1px 1px 1px silver;
	font-weight:  bold;
}


.clock {
    position: absolute;
    top: 23em;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    color: black;
    font-family: Orbitron;
    letter-spacing: 7px;
	 font: 700 1.5em system-ui;
   

}






</style>
</head>
<body>
	<center><i class="fa fa-check" id="fa"></i><h2 id="or">ORDER SUCCESFULL</h2></center><br><br>
<center><h3>WELCOME &nbsp&nbsp&nbsp<?php echo @$row["fullname"]; ?></h3>
	<h3 id="ss">your order is&nbsp&nbsp<?php echo @$row["status"]; ?></h3>
	<h3 id="ss">you will recieved an email when the order is complete.</h3>
	<h3 id="ss">PLEASE report any span email to us!!! </h3><a href="contactus.php"></a>
</center>
<p id="conf">YOUR SHIPPING ORDER HAS BEEN CONFIRMED</p><br>
<p id="conff">RECIEVER ID CARD NUMBER&nbsp<?php echo @$row["clientid"]; ?></p>
<p id="conf1">PRODUCT TYPE&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-right">&nbsp&nbsp&nbsp&nbsp<?php echo @$row["product"]; ?></i></p>
<BR>
<p id="conf1">PRODUCT WEIGHT&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-right">&nbsp&nbsp&nbsp&nbsp<?php echo @$row["weight"]; ?></i></p>
<BR>
<p id="conf1">DATE SHIPED&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-right">&nbsp&nbsp&nbsp&nbsp<?php echo @$row["datee"]; ?></i></p>
<BR>
<p id="conf1">DURATION FOR ARRIVAL&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-right">&nbsp&nbsp&nbsp&nbsp<?php echo @$row["duration"]; ?></i></p>

<div id="cntdiv">
	<div id="cnt">
<p id="cc">ORIGIN</p><?php echo @$row["country"];?>
<p>ADDRESS&nbsp&nbsp&nbsp<?php echo @$row["address"]; ?></p>
<p>PHONE&nbsp&nbsp&nbsp<?php echo @$row["telephone"]; ?></p>
</div>
<div id="cnt1">
<p id="cc">DESTINATION</p><?php echo @$row["client_country"];?>
<p>ADDRESS&nbsp&nbsp&nbsp<?php echo @$row["client_address"]; ?></p>
<p>PHONE&nbsp&nbsp&nbsp<?php echo @$row["client_telephone"]; ?></p>

</div>
</div>


<div id="top">
<h1 id="word">DEVTRACO SHIPPING LIMITED</h1>
<P id="cf">BATCH NUMBER &nbsp 8Y923923</P>
<p id="cf">TRACKING NUMBER&nbsp&nbsp&nbsp<?php echo @$row["tracking_code"]; ?></p>
	</div>

	<div id="MyClockDisplay" class="clock" onload="showTime()"></div>

<script>
	function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();
</script>

	</body>
	</html>