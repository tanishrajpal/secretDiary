<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

$secret = $_POST['secret'];
$email = $_POST['username'];
$sq= "UPDATE `diary`.`user` SET `diary` = '$secret' WHERE `user`.`email` = '$email' ;";

$result= mysqli_query($con,$sq);
if($con->query($sq)== true){
    echo "succesfully Updated";
  }
  else{
      echo "ERROR: $sq <br> $con->error";
  }
   $con->close();
  

?>