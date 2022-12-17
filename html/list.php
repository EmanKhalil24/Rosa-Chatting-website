<?php
session_start();
include_once "../php/config.php";
    if(!isset($_SESSION['unique_id'])){
    header("location: /project_web/html/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/project_web/css/list.css">
    <link rel="shortcut icon" type="image/x-icon" href="/project_web/photos/flower.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Marker+Hatch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/project_web/css/all.min.css">
    <title>Rosa | Users list page</title>
</head>
<body>
<section class="users">
    <div class="container">
        <div class="box">
        <header>
            <div class="content">
            <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
            <img src="../php/images/<?php echo $row['img']; ?>" alt="">
                <div class="details">
                <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                <p><?php echo $row['status']; ?></p>
                </div>
            </div>
            <a href="/project_web/php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
        </header>
        <hr>
        <div class="search">
            <span class="text">Select an user to start chat</span>
            <input type="text" placeholder="Enter name to search...">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>   

        <div class="users-list">

        </div>
        </div>
    </div>
</section>

    <script type="text/javascript" src="/project_web/js/users.js"></script>

</body>
</html>