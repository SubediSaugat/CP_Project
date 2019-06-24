<?php
    include "user-controller.php";
    $user = new User();

    if(isset($_POST['userRegister'])){
        $fullName = $_POST['fname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $memberType = $_POST['choose-member'];
        $shortBio = $_POST['bio'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        

        $user->setFullName($fullName);
        $user->setUserEmail($email);
        $user->setUserContact($contact);
        $user->setUserMemberType($memberType);
        $user->setUserMessage($shortBio);
        $user->setUserAddress($address);
        $user->setUserDOB($dob);
        $user->setUserGender($gender);
        $user->setUserPassword($password);
        $user->setUserCpassword($confirm_password);



        
        // $user->userRegister();
        // exit;

        if($user->userRegister()){
            header('Location: ../userLogin.php?msg=success');
        }else{
            echo "Something went wrong!";
        }
    }
?>