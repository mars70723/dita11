<?php

require_once 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

if(empty($email) || empty($password)) {
    echo "Fill all the fields!";
    header("refresh:3; url=login.php");
}else{
    $sql = "SELECT * FROM users WHERE email=:email";
    $sqlPrep = $conn-> prepare($sql);
    $sqlPrep-> bindParam(":email", $email);
    $sqlPrep->execute();

    if ($sqpPrep->rowCount() > 0){
        $data = $sqlPrep->fetch();
        if (password_verify($password, $darta['password'])){
            header("Location: dashboard.php");
        }else {
            echo "Wrong password";
        }
    }else{
        echo "nuk ka kurgjo";
    }
}