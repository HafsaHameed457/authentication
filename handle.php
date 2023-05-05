<?php
$server="localhost";
$username="root";
$password="";
$dbname='authentication';

$con=mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    die("Connection died".mysqli_connect_error());
}
else echo"Connection done";


$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql= " INSERT INTO `user` (`name`, `username`, `email`, `password`) VALUES ('$name', '$username', '$email', '$password'); ";
echo $sql;


if($con-> query($sql)==true){
    echo "inserted";
}
else {
    echo $con->error;
}

?>