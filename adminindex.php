<?php
session_start();
$connection = mysqli_connect("localhost","root","","test");
$database = mysqli_select_db($connection,"test");

if(isset($_POST["submit"])){
	$fullname = $_POST["fullname"];

$sql = "SELECT * FROM testtable WHERE fullname = '$fullname'";
$result=mysqli_query($connection,$sql);
$num_rows=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$_SESSION["id"]=$row['id'];

if ($num_rows > 0)
{
    ?>
    <script>
      alert('Successfully Log In');
      document.location='registeredit.php';
    </script>
    <?php

}
}
      ?>

      <!DOCTYPE html>
      <html>
      <head><title>admin search</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <style>

            .form{           
                text-align:  center;

             }

             .ad{
                width:  30em;
                height: 2em;
                text-align: center;
                margin-bottom: 2em;
             }

             @media all and (max-width: 580px){
               center{
                font-size:  2.8em;
               } 

               .ad,.suub{
                width: 100%;
                height:  60px;
                font-weight:  bold;
                font-size: 1.1em;
                text-align:  center;
               }
             }
          


        </style>
      </head>
      <body>
      	  

    <center>
    <div class="form">
         <form name="test" method="POST" action="adminindex.php">
            <p class="subscribe__copy">Approve users by searching each column name!!!</p>
        <input type="text" class="ad" name="fullname" placeholder="Enter your tracking no here" />
        <button type="submit" name="submit" value="submit" class="suub">SEARCH</button> 
        </div>
</form>
</center>
 

      </body>
      </html>


