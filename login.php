<?php
include 'includes/class_autoload.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
            <script type="text/javascript" src="validate.js"></script>
        <div class="container">
            <div class="form" id='form'>
                <form id='logform' name ="loginForm" class='input-group' method='post' onsubmit="return validate()">
                    <h2>Welcome to login</h2>
                    <div class="input-text">
                        <input type="text" name="username" placeholder="Username">
                        <span id="message"></span>
                    </div>
                    <div class="input-text">
                            
                            <input type="password" name ="password" placeholder="Password">
                            <span id="message2"></span>
                        </div>
                    <div class="buttons">
                            <input type="submit" name="login" value="Login">
                    </div>
                    <span>Don't have an account? <a href="#" onclick="toggling()">Register</a></span>
                </form>

            
                <form action="includes/exec.inc.php" id='regform' name ="regForm" class='input-group' method='post' onsubmit="return validate1()">
                    <h2>Welcome to Registration</h2>

                    <div class="input-text">
                        <input type="email" name="email" placeholder="Email">
                        <span id="message"></span>
                    </div>
                    <div class="input-text">
                        <input type="text" name="username" placeholder="Username">
                        <span id="message1"></span>
                    </div>
                    <div class="input-text">
                            
                            <input type="password" name ="password" placeholder="Password">
                            <span id="message2"></span>
                        </div>
                    <div class="buttons">
                            <input type="submit" name="register" value="Register">
                    </div>
                    <span>Already have an account? <a href="#" onclick="toggling()">Login</a></span>
                    
                </form>
            </div>
        </div>
    </body>
</html>