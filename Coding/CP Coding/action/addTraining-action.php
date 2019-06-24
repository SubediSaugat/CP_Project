<?php
    include "../class/training.class.php";
    $training = new Training();

    if(isset($_POST['trainingSubmit'])){
        $t_name = $_POST['t_name'];
        $t_date = $_POST['t_date'];
        $t_venue = $_POST['t_venue'];
        $t_description = $_POST['t_description'];
        
         // For Image
        $randomNumber = rand(10000, 100000000);
       

        $filename = $_FILES['image']['name'];

        $file = explode('.', $filename);
        $count = count($file);
        $ext = $file[$count-1];
        $imageName = $randomNumber.'.'.$ext;

        if($ext=='jpg'||$ext=='png'||$ext=='gif' ||$ext=='jpeg'){
            move_uploaded_file($_FILES['image']['tmp_name'],'../images/training-images/'.$imageName);
        }
        else{
            echo 'Wrong file type!'.'<br><a href="../admin/add-product.php">Go back!</a>';
        }

        $training->setTrainingName($t_name);
        $training->setTrainingDate($t_date);
        $training->setTrainingVenue($t_venue);
        $training->setTrainingDescription($t_description);
        $training->setTrainingImage($imageName);

        // $training->addTraining();
        // exit;
        if($training->addTraining())
        {
            header("Location: ../addTraining.php?msg=trainingAdded");
        }
    }
?>