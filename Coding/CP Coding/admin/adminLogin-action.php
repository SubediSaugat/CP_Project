<?php
    include "admin-controller.php";
    $admin = new admin();

    if(isset($_POST['loginSubmit'])){
        $username = $_POST['email'];
        $password = $_POST['password'];

        $admin->setAdminUsername($username);
        $admin->setAdminPassword($password);


        // echo $username . "<br>";
        // echo $password . "<br>";
        // exit;

        if($admin->adminLogin()){
            header('Location: admin.php');
        }else{
            echo "Something went wrong!";
        }
    }
?>