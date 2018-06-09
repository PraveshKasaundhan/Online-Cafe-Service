<php>

<head>
    <title>MENU</title>
    <link rel="icon" href="pics/logo.png">
    <link rel="stylesheet" href="css/navhead.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script>
        function book(id) {
            $.post('menuser.php', { pid: id });
            alert('item added to cart');
        }
    </script>
    <style>
        #jumpmenu {
            margin: 0px 0px 0px 0px;
            font: bolder;
            font-size: 40px;
            background-color: 212121;
            text-align: center;
        }

        #jumpmenu #jump {
            color: FFA500;
            text-decoration: none;
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
    <a href="#">
        <li id="selected">MENU</li>
    </a>
    <a href="cart.php">
        <li>CART</li>
    </a>
    <a href="checkout.php">
        <li>CHECKOUT</li>
    </a>
</nav>

<body>
    <div id="result">

    </div>
    <center id="junk">
        <div id="heading">
            <p>JUNKY</p>
            <div>
                <img src="pics/fries.png" alt="">
                <br>
                <b>FRIES</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b10" onclick="book(10);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/taco.png" alt="">
                <br>
                <b>TACO</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b11" onclick="book(11);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/sushi.png" alt="">
                <br>
                <b>SUSHI</b>
                <i> 100Rs</i>
                <br>
                <button type="submit" name="b12" onclick="book(12);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/pizza.png" alt="">
                <br>
                <b>PIZZA</b>
                <i> 100Rs</i>
                <br>
                <button type="submit" name="b13" onclick="book(13);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/pasta.png" alt="">
                <br>
                <b>PASTA</b>
                <i> 70Rs</i>
                <br>
                <button type="submit" name="b14" onclick="book(14);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/burger.png" alt="">
                <br>
                <b>BURGER</b>
                <i> 80Rs</i>
                <br>
                <button type="submit" name="b15" onclick="book(15);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/hotdog.png" alt="">
                <br>
                <b>HOTDOG</b>
                <i> 80Rs</i>
                <br>
                <button type="submit" name="b16" onclick="book(16);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/nachos.png" alt="">
                <br>
                <b>NACHOS</b>
                <i> 100Rs</i>
                <br>
                <button type="submit" name="b17" onclick="book(17);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/sandwich.png" alt="">
                <br>
                <b>SANDWICH</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b18" onclick="book(18);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/noodles.png" alt="">
                <br>
                <b>NOODLES</b>
                <i> 60Rs</i>
                <br>
                <button type="submit" name="b19" onclick="book(19);">ADD 1 TO CART</button>
            </div>
        </div>

        <div id="heading">
            <p>DRINKS</p>
            <div>
                <img src="pics/water.png" alt="">
                <br>
                <b>WATER</b>
                <i> 10Rs</i>
                <br>
                <button type="submit" name="b20" onclick="book(20);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/lime.png" alt="">
                <br>
                <b>LIME</b>
                <i> 20Rs</i>
                <br>
                <button type="submit" name="b21" onclick="book(21);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/juice.png" alt="">
                <br>
                <b>JUICE</b>
                <i> 30Rs</i>
                <br>
                <button type="submit" name="b22" onclick="book(22);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/milkshake.png" alt="">
                <br>
                <b>MILKSHAKE</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b23" onclick="book(23);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/tea.png" alt="">
                <br>
                <b>TEA</b>
                <i> 20Rs</i>
                <br>
                <button type="submit" name="b24" onclick="book(24);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/coffee.png" alt="">
                <br>
                <b>COFFEE</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b25" onclick="book(25);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/milk.png" alt="">
                <br>
                <b>MILK</b>
                <i> 20Rs</i>
                <br>
                <button type="submit" name="b26" onclick="book(26);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/mocktail.png" alt="">
                <br>
                <b>MOCKTAIL</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b27" onclick="book(27);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/softdrink.png" alt="">
                <br>
                <b>SOFTDRINK</b>
                <i> 20Rs</i>
                <br>
                <button type="submit" name="b28" onclick="book(28);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/cola.png" alt="">
                <br>
                <b>COLA</b>
                <i> 20Rs</i>
                <br>
                <button type="submit" name="b29" onclick="book(29);">ADD 1 TO CART</button>
            </div>
        </div>

        <div id="heading">
            <p>DESSERT</p>
            <div>
                <img src="pics/oreo.png" alt="">
                <br>
                <b>OREO</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b30" onclick="book(30);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/pastry.png" alt="">
                <br>
                <b>PASTRY</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b31" onclick="book(31);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/icecream.png" alt="">
                <br>
                <b>ICECREAM</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b32" onclick="book(32);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/brownie.png" alt="">
                <br>
                <b>BROWNIE</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b33" onclick="book(33);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/donut.png" alt="">
                <br>
                <b>DONUT</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b34" onclick="book(34);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/cookie.png" alt="">
                <br>
                <b>COOKIE</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b35" onclick="book(35);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/cupcake.png" alt="">
                <br>
                <b>CUPCAKE</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b36" onclick="book(36);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/muffin.png" alt="">
                <br>
                <b>MUFFIN</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b37" onclick="book(37);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/chocolate.png" alt="">
                <br>
                <b>CHOCOLATE</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b38" onclick="book(38);">ADD 1 TO CART</button>
            </div>
            <div>
                <img src="pics/pie.png" alt="">
                <br>
                <b>PIE</b>
                <i> 50Rs</i>
                <br>
                <button type="submit" name="b39" onclick="book(39);">ADD 1 TO CART</button>
            </div>
            
        </div>
        <div id="jumpmenu">
            <a id="jump" href="cart.php">JUMP TO CART</a>
        </div>
    </center>

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

</php>