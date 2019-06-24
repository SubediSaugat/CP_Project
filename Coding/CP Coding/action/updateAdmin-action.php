<?php
    session_start();
    require "../admin/admin-controller.php";
    $admin = new Admin();

    if(isset($_POST['adminUpdate'])){
        // Datas from form
        $a_id = $_SESSION['admin-id'];
        $username = $_POST['a_username'];
        $password = $_POST['a_password'];
        

        $admin->setAdminId($a_id);
        $admin->setAdminUsername($username);
        $admin->setAdminPassword($password);

        // $admin->updateProfile($a_id);
        // exit;
        if($admin->updateProfile($a_id))
        {
            header("Location: ../admin/admin.php?msg=adminUpdated");
        }
    }
?>