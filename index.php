<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['number'];
$message=$_POST['message'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into contact us(name,email,number,message)(?,?,?,?)");
    $stmt->bind_param("ssis",$name,$email,$number,$message);
    $stmt->execute();
    echo "contact us registration successful...";
    $stmt->close();
    $conn->close();
}
?>
