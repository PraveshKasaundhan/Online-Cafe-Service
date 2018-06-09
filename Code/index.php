<?php 
require 'logregser.php';
?>
<html>

<head>
    <title>LOGIN</title>
    <link rel="icon" href="pics/logo.png">
    <link rel="stylesheet" href="css/navhead.css">
    <link rel="stylesheet" href="css/indreg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<header>
    <img src="pics/logo.png" alt="">
    <span id="panda">PANDA</span>
    <span id="punch"> . . . . . EAT SLEEP REPEAT</span>
</header>

<body>

    <video src="video/popcorndrop.MP4" width="100%" autoplay loop></video>
    <center>
        <form method="POST" action="index.php">
            <div>
                <p id="errors">
                    <?php
                    foreach ($errors as $value) {
                        echo "$value <br>";
                    }
               ?>
                </p>
                <p>
                    <label for="userid">UserID: </label>
                    <input type="text" name="userid" id="userid">
                </p>
                <p>
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password">
                </p>
                <p>
                    <button type="submit" name="login" id="login">LOGIN</button>
                </p>
                <p>
                    <a href="register.php">OR REGISTER</a>
                </p>
            </div>
        </form>
    </center>

</body>
<footer>
    <div id="info">
        &copy PANDA 2018
        <br>
        <br> Developers:
        <br> Pravesh Kasaundhan
    </div>
    <div id="media">
        <p>
            FOLLOW US:
        </p>
        <p>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-envelope"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-google-plus"></a>
        </p>
    </div>
    <div>
        CONTACT US:
        <br> 9876543210
        <br> panda@example.com
        <br> Bengaluru
        <br> India
    </div>
</footer>

</html>