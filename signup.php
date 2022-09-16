<?php
session_start();

echo "Successfully logged in";
$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection Successfully";
}
else{
    echo "No Connection";
}
mysqli_select_db($con,'flipkart-clone');
$name=$_POST['email'];
$pass=$_POST['password'];

$quer= "Select * from userdata where username = '$name' && password = '$pass'";
$result=mysqli_query($con,$quer);
$sum=mysqli_num_rows($result);
if($num==1){
    $_SESSION['usernaame']=$name;
    header('Location:index.html');
}
else{
    header('Location:login.html');
}
?>
