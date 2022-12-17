<?php 
  session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: /project_web/html/Registration.php");
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/project_web/photos/flower.png">
    <link rel="stylesheet" href="/project_web/css/Registration.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Marker+Hatch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Rosa | Registration</title>
</head>
<body>
    <section class="registration">
        <div class="container">
            <div class="box-regi">
                <div class="cont">
                <div class="regi-head">
                    <h2>Rosa Chat App</h2>
                    <hr>
                </div>
                <div class="regi-req"></div>
                <div class="regi-form">
                    <form action="#" enctype="multipart/form-data" >
                        <label for="regi" class="fName">First name</label>
                        <br>
                        <input type="text" name="fname" placeholder="First name" required>
                        <br>
                        <label for="regi" class="lName">Last name</label>
                        <br>
                        <input type="text" name="lname" placeholder="Last name" required>
                        <br>
                        <label for="regi" class="email">Email address</label>
                        <br>
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <br>
                        <label for="regi" class="pass">password</label>
                        <br>
                        <div class="password-container">
                            <input type="password" name="password" placeholder="Enter your password" id="password" required>
                            <i class="fa-solid fa-eye" id="eye"></i>                            
                            </div>
                        <br>
                        <label for="regi" class="file">Select image</label>
                        <br>
                        <input type="file" name="image" class="file-reg" required>
                        <br>
                        <button id="chatting" class="button">Continue to Chat</button>
                    </form>
                </div>
                <div class="regi-no">
                    <p>Already signed up? <a href="/project_web/html/login.php">Login now</a></p>
                </div>                    
                </div>

            </div>
        </div>
    </section>
    <script type="text/javascript" src="/project_web/js/signup.js"></script>
    <script type="text/javascript" src="/project_web/js/pass-show-hide.js"></script>

</body>
</html>