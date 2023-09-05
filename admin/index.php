<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css"> 
</head>
<body>
    <main>
        <div class="row">
            <div class="colm-form">
                <div class="form-container" height="50%">
                    <h2>Login Here</h2>    <br>
                <form action="login-query.php" method="post">
                    <input type="text" placeholder=" Enter your username address " name="email">       <br> <br>
                    <input type="password" placeholder="Password" name="password">        <br><br>
                    <button class="btn-login" name="submit">Login</button>       <br> <br>
                    <!-- <a href="#">Forgotten password?</a>       <br> <br> -->
                    <br>    <br>    <br>
                </form>
                </div>
                
            </div>
        </div>
    </main>
    
</body>
</html>