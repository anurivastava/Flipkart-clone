<?php
session_start();
header('Location:login.html');
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

$quer= "Select * from userdata where username = '$name' && password='$pass'";
$result=mysqli_query($con,$quer);
$sum=mysqli_num_rows($result);
if($num==1){
    echo "Duplicate Date";
}
else{
    $querr="insert into userdata(username,password) values('$name','$pass')";
    mysqli_query($con,$querr);
}
?>
