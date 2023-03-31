<?php
$username= "root";
$password= "";
$server='localhost';
$db = 'aims';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
}
else{
    die("Connection Failed" . mysqli_connect_error());
}
?>
