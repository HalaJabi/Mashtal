<?php


    $mail = $_POST['email'];
    $pass = $_POST['pass'];


$conn=new mysqli('localhost','root','','final');


if($conn->connect_error)
{
    die('Connection Failed: ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("select * from signup where email =? ");
    $stmt->bind_param("s",$mail);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result ->num_rows > 0)
    {
        $data = $stmt_result->fetch_assoc();
        if($data['pass'] == $pass)
        {

            header('location:index.php');
        }else{
             $message[] = 'incorrect password or email!';
        }
    }else{
        $message[] = 'incorrect password or email!';
    }

}
?>
