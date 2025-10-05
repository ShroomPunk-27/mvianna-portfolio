<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MV-Art Portfolio Page</title>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
    <a name="Top"></a>
    <div class="menu">
        <div class="logo">
        <img src="imgs/misc/PlaceholderLogo.png" alt="Logo-Placeholder" width="85px">
        <a href="index.php">MV's Atelier</a>
        </div>
        <button class="menu-toggle" aria-label="Toggle menu">&#9776;</button>
        <ul id="main-menu">
            <li><a href="index.php">Home</a></li>
            <li class="separator"> | </li>
            <li><a href="gallery/index.php">Gallery</a></li>
            <li class="separator"> | </li>
            <li><a href="contact/index.php">Contact</a></li>
            <li class="separator"> | </li>
            <li><a href="about/index.php">About</a></li>
        </ul>
        </div>
    <br>
    <div class="home_container">
        <p>Oh, a visitor! Come in, come in. Mind the tangle of roots and wires.<p>
        <h2>Welcome to the Atelier!</h2>
        <br><p>A quiet nook tucked somewhere between the realms of dreams and dice rolls, where creative chaos meets careful craft.
        <br><br>Here you'll find the things I've created, from character designs to illustrations, and even some animations. So stick around, poke through the shelves, and maybe you'll spot a familiar face or two (or a hidden key... shhh).
        <br><br>Thanks for stopping by! I hope you find something here that makes you smile, inspires your next adventure, or sparks a commission idea...
        </p>
        <img src="imgs/misc/nature/Mega_tree1.png" alt="Mega Tree" class="deco" id="tree-1">
        <img src="imgs/misc/nature/White-red_mushroom3.png" alt="White Mushrooms" class="deco" id="mushroom-1">
    </div>
    <hr>
    <div class="footer">
        <div class="content">
        <h6>Portfolio</h6>
        <h5><a href="index.php">MV's Atelier</a></h5>
        <h6>Contact</h6>
        </div>
        <ul>
            <li>|</li>
            <li><a href="https://www.instagram.com/indoor_weirdo?igsh=MXc4MjhvdTkyaWwyaA%3D%3D&utm_source=qr">Instagram</a></li>
            <li>|</li>
        </ul>
        <a name="Bottom"></a>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.menu-toggle').addEventListener('click', function() {
                document.getElementById('main-menu').classList.toggle('show');
            });
        });
    </script>
</body>
</html>