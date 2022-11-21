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
 <head><title>USER PROFILE</title>
<style>


  table{
    position: absolute;
    left:  20px;
    width:  85%;
    border:  1px solid black;
    border-collapse: collapse;
    border-style: none;
  }

  th,td{
    padding: 2px;
    text-align: left;
    style="color:black;
     text-shadow: 1px 1px 1px whitesmoke;
      font: 300 20px system-ui;
  }

  td{
      font: 700 20px system-ui;
  }

  tr:nth-child(even) {
  background-color: #D6EEEE;
}



.glow-on-hover {
    right:  0px;
    top: 0px;
    width: 150px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    
    cursor: pointer;
    position: absolute;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}



</style>
 </head>
 <body>
<button onclick="window.location.href='orderconfirm.php'" class="glow-on-hover">VIEW ORDER</button>
  <div id="user">
<table>
  <tr>
  <th>FULLNAME</th>
  <td><?php echo @$row["fullname"];?></td>
</tr>

<tr>
  <th>EMAIL</th>
  <td><?php echo @$row["email"];?></td>
</tr>

<tr>
  <th>TELEPHONE</th>
  <td><?php echo @$row["telephone"];?></td>
</tr>

<tr>
  <th>ADDRESS</th>
  <td><?php echo @$row["address"];?></td>
</tr>

<tr>
  <th>CITY</th>
  <td><?php echo @$row["city"];?></td>
</tr>

<tr>
  <th>COUNTRY</th>
  <td><?php echo @$row["country"];?></td>
</tr>

<tr>
  <th>ZIPCODE</th>
  <td><?php echo @$row["zipcode"];?></td>
</tr>

<tr>
  <th>DATE</th>
  <td><?php echo @$row["datee"];?></td>
</tr>

<tr>
  <th>TRACKING CODE</th>
  <td><?php echo @$row["tracking_code"];?></td>
</tr>

<tr>
  <th>PRODUCT</th>
  <td><?php echo @$row["product"];?></td>
</tr>

<tr>
  <th>WEIGHT</th>
  <td><?php echo @$row["weight"];?></td>
</tr>

<tr>
  <th>DURATION</th>
  <td><?php echo @$row["duration"];?></td>
</tr>

<tr>
  <th>CLIENT ID CARD</th>
  <td><?php echo @$row["clientid"];?></td>
</tr>

<tr>
  <th>CLIENT NAME</th>
  <td><?php echo @$row["client_name"];?></td>
</tr>

<tr>
  <th>CLIENT ADDRESS</th>
  <td><?php echo @$row["client_address"];?></td>
</tr>

<tr>
  <th>CLIENT EMAIL</th>
  <td><?php echo @$row["client_email"];?></td>
</tr>

<tr>
  <th>CLIENT COUNTRY</th>
  <td><?php echo @$row["client_country"];?></td>
</tr>

<tr>
  <th>CLIENT TELEPHONE</th>
  <td><?php echo @$row["client_telephone"];?></td>
</tr>

<tr>
  <th>status</th>
  <td><?php echo @$row["status"];?></td>
</tr>
</table>
</div>
</body>
  </html>


