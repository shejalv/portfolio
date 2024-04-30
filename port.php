<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname  = "form";
$conn = mysqli_connect($server,$username,$password,$dbname,3306);
if($conn){
    echo " Connected";
}
else{
    echo " not Connected";
}
$name = $_POST['name'];
// $surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO contact(Name, Email, Phone, Message) VALUES ('$name','$email','$phone','$message')";
$result = mysqli_query($conn, $sql);
if($result){
    echo "\nData Submitted Succesfully";
}
else{
    echo "Something! went wrong.Query error";
}
$conn -> close();
?>