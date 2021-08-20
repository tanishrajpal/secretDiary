<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
// if(isset($_POST['fname'])){

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
    $row = mysqli_fetch_array($result);
    $diary= $row['diary'];
    $_SESSION['username']=$email;
    $_SESSION['secret']=$diary;
 // echo "success";
  header('location:home.php');
}else{
header('location:login.php');

// echo $sq;

}
 $con->close();
//}
?>
