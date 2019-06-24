<?php
    include "../class/event.class.php";
    $event = new Event();

    if(isset($_POST['eventSubmit'])){
        $e_title = $_POST['e_title'];
        $e_start_date = $_POST['e_start_date'];
        $e_date = $_POST['e_date'];
        $e_venue = $_POST['e_venue'];
        $e_description = $_POST['e_description'];
        
         // For Image
        $randomNumber = rand(10000, 100000000);
       

        $filename = $_FILES['image']['name'];

        $file = explode('.', $filename);
        $count = count($file);
        $ext = $file[$count-1];
        $imageName = $randomNumber.'.'.$ext;

        if($ext=='jpg'||$ext=='png'||$ext=='gif' ||$ext=='jpeg'){
            move_uploaded_file($_FILES['image']['tmp_name'],'../images/event-images/'.$imageName);
        }
        else{
            echo 'Wrong file type!'.'<br><a href="../admin/add-product.php">Go back!</a>';
        }

        $event->setEventTitle($e_title);
        $event->setEventStartDate($e_start_date);
        $event->setEventDate($e_date);
        $event->setEventVenue($e_venue);
        $event->setEventDescription($e_description);
        $event->setEventImage($imageName);

        // $event->addEvent();
        // exit;
        if($event->addEvent())
        {
            header("Location: ../add-event.php?msg=eventAdded");
        }
    }
?>