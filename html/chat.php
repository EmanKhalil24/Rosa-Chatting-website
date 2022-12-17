<?php
session_start();
include_once "/xampp/htdocs/project_web/php/config.php";
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
    <link rel="stylesheet" href="/project_web/css/chat.css">
    <link rel="shortcut icon" type="image/x-icon" href="/project_web/photos/flower.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Marker+Hatch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/project_web/css/all.min.css">
    <title>Rosa | Chat page</title>
</head>
<body>
    <section class="users">
        <div class="container">
            <div class="chat-area">
        <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }
            ?>
            <div class="content">
                <a href="/project_web/html/list.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="../php/images/<?php echo $row['img']; ?>" alt="">
                <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                    <p><?php echo $row['status']; ?></p>
                </div>
            </div>
        </header>
        <div class="chat-box">

        </div>  

        <form action="#" class="typing-area">
            <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
            <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
            <button><i class="fab fa-telegram-plane"></i></button>
        </form>
            </div>
            </div>
    </section>

    <script type="text/javascript" src="../js/chat.js"></script>
</body>
</html>