
   <?php
   session_start();
   $connection = mysqli_connect("localhost","root","","test");
$database = mysqli_select_db($connection,"test");
$id=$_SESSION['id'];
$sql="SELECT * FROM testtable WHERE id='$id'";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result);

      if(isset($_POST["update"])){
        $fullname = $_POST["fullname"];
        $status = $_POST["status"];
       
$query = "UPDATE testtable SET fullname = '$fullname', status = '$status'   WHERE id = '$id'";
                    $result = mysqli_query($connection,$query);
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "adminapproved.php";
        </script>
        <?php
             }              
?> 

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width,scalable=no">
<head>
<style>
#hide{
display: block;
} 

center{
  font-size: 3em;
} 

#full,#ppd{
  font-size: 0.6em;
}



</style>
</head>
<body>
    <center>
    <h2>ADMIN APPROVED USERS</h2>
  <form action="registeredit.php" method="POST">
<input name="fullname" id="full" value="<?php echo @$row["fullname"]; ?>">
 <select name="status" id="ppd">
  <option value="pending"

<?php
if(@$row["status"] =='status'){
  echo "selected";
}
?>
  >pending</option>
  <option value="approved">approved</option>
</select>
<input type="submit" id="upd" name="update" value="update"> 

</form>
</center>
</body>
</html>