<html>

<head>
    <title>CART</title>
    <link rel="icon" href="pics/logo.png">
    <link rel="stylesheet" href="css/navhead.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script>
        function remove(id) {
            $.post('cartcancel.php', { pid: id });
            location.reload();
            alert('item will be deleted from cart');
        }
    </script>
    <style>
        #heading{
            margin: 0px 0px 0px 0px;
            font: bolder;
            font-size: 40px;
            color: 4CAF50;
            background-color: 212121;
            text-align: center;
        }

        table{
            margin-top:50px;
            padding:25px;
            border:10px outset gray;
            font-size:30px;
            text-align:center;
            background-color:black;
            border-radius:0px 10px 10px 10px;
        }
        table th{
            border:none;
            padding:10px;
            color:white;
            border-radius:0px 10px 10px 10px;
            background-color:2F4F4F;
        }
        table td{
            border:none;
            color:white;
            border-radius:0px 10px 10px 10px;
            background-color:708090;
        }
        #cancelbtn{
            border:none;
            border-radius:0px 10px 10px 10px;
            padding:10px 50px 10px 50px;
            background-color:8B0000;
            color:white;
        }
        #total{
            padding:10px;
            font-size: 30px;
            color: white;
            background-color: orange;
            text-align: center;
        }
        #addmore{
            padding:10px;
            font-size: 30px;
            background-color: BDB76B;
            text-align: center;   
        }
        #finish{
            padding:10px;
            font-size: 30px;
            background-color: 006400;
            text-align: center;
        }
        a{  
            padding:10px;
            color: white;
            text-decoration:none;
        }
    </style>
</head>
<header>
    <img src="pics/logo.png" alt="">
    <span id="panda">PANDA</span>
    <span id="punch"> . . . . . EAT SLEEP REPEAT</span>

</header>
<nav>
    <a href="home.php">
        <li>HOME</li>
    </a>
    <a href="menu.php">
        <li>MENU</li>
    </a>
    <a href="#">
        <li id="selected">CART</li>
    </a>
    <a href="checkout.php">
        <li>CHECKOUT</li>
    </a>
</nav>

<body>
    <p id="heading">ITEMS IN CART</p>
    
    <center id="display">
        <?php
            include 'cartdisp.php';
        ?>
    <p id="addmore"><a href="menu.php">Add More To Cart</a></p>
    </center>

        <video src="video/gummybear.mp4" autoplay loop width="100%"></video>
</body>
<footer>
    <div id="info">
        &copy PANDA 2017
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