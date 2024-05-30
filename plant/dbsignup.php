<?php



    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $mail = $_POST['email'];
    $pass = $_POST['pass'];
    $date = $_POST['Date'];
    $gender = $_POST['gender'];

$conn=new mysqli('localhost','root','','final');
if($conn->connect_error)
{
    die('Connection Failed: ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into signup(fname , lname , email,pass,date,gender) values (?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$firstname,$lastname,$mail,$pass,$date,$gender);
    $stmt->execute();
    header('location:reg_sign.php');
    $stmt->close();
    $conn->close();
}

?>