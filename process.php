<?php

if(isset($_POST['login_submit'])){

$email=$_POST['email'];
$password=$_POST['pass'];
$connection=mysqli_connect('localhost','root','','loginapp');
if($connection){
    echo "We are connected with database ";
}
else{
    die("Faild".mysqli_error());
}
$password=mysqli_real_escape_string($connection,$password);
$email=mysqli_real_escape_string($connection,$email);
$hashFormat="$2y$10$";
$salt="thisisdevainsecription007";
$ecription=$hashFormat.$salt;
$password=crypt($password,$ecription);

$query="INSERT INTO users(name,password)";
$query.="VALUES('$email','$password')";
$result=mysqli_query($connection,$query);

if(!$result){

    die("Faild".mysqli_error());
}

}





?>