 
<?php 
include 'adminindex.php';
$connection = mysqli_connect("localhost","root","","test");
$database = mysqli_select_db($connection,"test");

?>


<!DOCTYPE html>
<html>
<head><title>admin logging</title>
<meta name="viewport" content="width=device-width,  scalable=no">
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100vw;
  height: 5em;
 
}  
       td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 1em;
}

h1 {
  color: gold;
  display: block;
}

@media all and (max-width: 580px){
  table {
   font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100vw;
  height: auto;
  font-size:  3em;
  font-size: 1.5em;
  }
}

</style>
</head>

<body>
  <table>
    <tr>

            <th>USER_ID</th>
            <th>FULLNAME</th>
            <th>EMAIL</th>
            <th>TELEPHONE</th>
            <th>ADDRESS</th>
            <th>COUNTRY</th>
            <th>CITY</th>
            <th>ZIPCODE</th>
            <th>DATEE</th>
            <th>TRACKING_CODE</th>
            <th>PRODUCT</th>
            <th>WEIGHT</th>
            <th>DURATION</th>
            <th>COURIER</th>
            <th>CLIENT_ID</th>
            <th>CLIENT_NAME</th>
            <th>CLIENT_ADDRESS</th>
            <th>CLIENT_EMAIL</th>
            <th>CLIENT_COUNTRY</th>
            <th>CLIENT_TELEPHONE</th>
            <th>STATUS</th>
          
         
    </tr>

   <?php
     
     $sql = "SELECT * FROM testtable;";
     $result = mysqli_query($connection,$sql);
     $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0){
          while ($row=mysqli_fetch_assoc($result)){
    
        
 echo "<tr>";

                   echo "<td>".$row["id"]. "</td>";
                   echo "<td>".$row["fullname"]."</td>";
                   echo "<td>".$row["email"]."</td>";
                   echo "<td>".$row["telephone"]."</td>";
                   echo "<td>" .$row["address"]. "</td>";
                   echo "<td>" .$row["country"]. "</td>";
                   echo "<td>" .$row["city"]. "</td>";
                   echo "<td>" .$row["zipcode"]. "</td>";
                   echo "<td>" .$row["datee"]. "</td>";
                   echo "<td>" .$row["tracking_code"]. "</td>";
                   echo "<td>" .$row["product"]. "</td>";
                   echo "<td>" .$row["weight"]. "</td>";
                   echo "<td>" .$row["duration"]. "</td>";
                   echo "<td>" .$row["courier"]. "</td>";
                   echo "<td>" .$row["clientid"]. "</td>";
                   echo "<td>" .$row["client_name"]. "</td>";
                   echo "<td>" .$row["client_address"]. "</td>";
                   echo "<td>" .$row["client_email"]. "</td>";
                   echo "<td>" .$row["client_country"]. "</td>";
                   echo "<td>" .$row["client_telephone"]. "</td>";
                   echo "<td>" .$row["status"]. "</td>";
                  echo "</tr>";

     }

        }




  ?>

    </table>
  </body>
  </html>
  