<?php
    session_start();
    if(!isset($_SESSION['user-name'])){
        echo "<script>window.alert('Please login to visit this page!');</script><p>Go to<a href='../userLogin.php'> login</a> page</p>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p><a href="user-logout.php">Logout</a></p>
    <h1>Welcome <?php echo $_SESSION['user-name']; ?> to Dashboard</h1>
</body>
</html>