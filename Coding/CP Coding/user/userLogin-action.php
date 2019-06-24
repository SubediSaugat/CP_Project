<?php
    include "user-controller.php";
    $user = new user();

    if(isset($_POST['loginnSubmit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user->setUserEmail($email);
        $user->setUserPassword($password);


        if($user->userLogin()){
            header('Location: user-dashboard.php');
        }else{
            echo "Something went wrong!";
        }
    }
?>