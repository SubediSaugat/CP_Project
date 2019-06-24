<?php
    include "../class/sportFacility.class.php";
    $sports = new Sports();

    if(isset($_POST['sportsSubmit'])){
        $sf_type = $_POST['choose-sports'];
        $sf_description = $_POST['sf_description'];

         // For Image
        $randomNumber = rand(10000, 100000000);
       

        $filename = $_FILES['image']['name'];

        $file = explode('.', $filename);
        $count = count($file);
        $ext = $file[$count-1];
        $imageName = $randomNumber.'.'.$ext;

        if($ext=='jpg'||$ext=='png'||$ext=='gif' ||$ext=='jpeg'){
            move_uploaded_file($_FILES['image']['tmp_name'],'../images/sportFacility-images/'.$imageName);
        }
        else{
            echo 'Wrong file type!'.'<br><a href="../admin/add-product.php">Go back!</a>';
        }

        $sports->setSportsTitle($sf_type);
        $sports->setSportsDescription($sf_description);
        $sports->setSportsImage($imageName);

        // $sports->addSports();
        // exit;
        if($sports->addSports())
        {
            header("Location: ../addSportFacility.php?msg=sportsAdded");
        }
    }
?>