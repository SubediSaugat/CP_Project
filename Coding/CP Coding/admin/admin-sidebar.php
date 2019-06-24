<?php 
// if(!isset($_SESSION['admin-id'])){
//     header ('Location: ../login-first');
//     exit;
// }
?>
<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">

     <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.subedisaugat.com.np" class="simple-text">
                Bulls Club <br>Swimming Pool
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="admin.php">
                    <p>Admin Profile</p>
                </a>
            </li>
            <li>
                <a href="../addTraining.php">
                    <p>Add Training</p>
                </a>
            </li>
            <li>
                <a href="view-training.php">
                    <p>View Training</p>
                </a>
            </li>
            <li>
                <a href="../add-event.php">
                    <p>Add Event</p>
                </a>
            </li>
            <li>
                <a href="view-event.php">
                    <p>View Event</p>
                </a>
            </li>
            <li>
                <a href="../addSportFacility.php">
                    <p>Add Sports</p>
                </a>
            </li>
            <li>
                <a href="view-sportFacility.php">
                    <p>View Sports</p>
                </a>
            </li>
        </ul>
    </div>
</div>