<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/project_web/photos/flower.png">
    <link rel="stylesheet" href="/project_web/css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Marker+Hatch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Rosa | Log in</title>
</head>
<body>
    <section class="login">
        <div class="container">
            <div class="box-log">
                <div class="cont">
                <div class="log-head">
                    <h2>Rosa Chat App</h2>
                    <hr>
                </div>
                <div class="log-req"></div>
                <div class="log-form">
                    <form action="#" enctype="multipart/form-data">
                        <label for="log" class="email">Email address</label>
                        <br>
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <br>
                        <label for="log" class="pass">password</label>
                        <br>
                        <div class="password-container">
                        <input type="password" name="password" placeholder="Enter your password" id="password" required>
                        <i class="fa-solid fa-eye" id="eye"></i>                            
                        </div>
                        <br>
                        <button id="chatting" class="button">Continue to Chat</button>
                    </form>
                </div>
                <div class="log-no">
                    <p>Not yet signed up? <a href="../html/Registration.php">Signup now</a></p>
                </div>                    
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="/project_web/js/login.js"></script>
    <script type="text/javascript" src="/project_web/js/pass-show-hide.js"></script>
</body>
</html>