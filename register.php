<?php
session_start();
//header('location:login.php');
if(isset($_POST['email'])){

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
$email = $_POST['email'];
$pass = $_POST['password'];
$password=md5($pass);

$sq= "SELECT * from `diary`.`user` where email='$email' && password='$password';";
$result= mysqli_query($con,$sq);
$num = mysqli_num_rows($result);
if($num == 1){
    header('location:signup.php');
  echo "Duplicate value";
}else{
$sql= "INSERT INTO `diary`.`user` (`email`, `password`, `diary`) VALUES ('$email', '$password',' Null');";
  

 header('location:login.php');

if($con->query($sql)== true){
  // echo "succesfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
}
 $con->close();
}
?>
