<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Gallery- Commissions</title>
<link rel="stylesheet" type="text/css" href="../../css/mystyle.css">
</head>
<body>
    <a name="Top"></a>
    <div class="menu">
        <div class="logo">
        <img src="../../imgs/misc/PlaceholderLogo.png" alt="Logo-Placeholder" width="85px">
        <a href="../../index.php">MV's Atelier</a>
        </div>
        <button class="menu-toggle" aria-label="Toggle menu">&#9776;</button>
        <ul id="main-menu">
            <li><a href="../../index.php">Home</a></li>
            <li class="separator"> | </li>
            <li><a href="../index.php">Gallery</a></li>
            <li class="separator"> | </li>
            <li><a href="../../contact/index.php">Contact</a></li>
            <li class="separator"> | </li>
            <li><a href="../../about/index.php">About</a></li>
        </ul>
    </div>
    <br>
    <div class="gallery-container">
        <nav class="bookmarks">
            <button data-section="gallery"><a href="../index.php">Go Back</a></button>
            <button data-section="school"><a href="../school/index.php">School Work</a></button>
            <button data-section="commissions"><a href="index.php">Commissions</a></button>
            <button data-section="animations"><a href="../animations/index.php">Animations</a></button>
            <button data-section="personal"><a href="../personal/index.php">Personal Work</a></button>
        </nav>
        <div class="shelf">
            <section id="commissions" class="gallery-section">
                <img src="../../imgs/gallery/commissions/Demon-Oly_Flute.png" alt="Demon Flute" width="600px">
                <img src="../../imgs/gallery/commissions/Darcy&Hooty.png" alt="Owlphibia" height="600px">
                <img src="../../imgs/gallery/commissions/Raknar_Juguito.png" alt="Dragonborn" width="600px">
                <img src="../../imgs/gallery/commissions/SkeleTinch.png" alt="Fiery Skeleton" height="600px">
            </section>
        </div>
    </div>
    <br>
    <p><a href="#Top">Back to Top</a></p>
    <hr>
    <div class="footer">
        <div class="content">
        <h6>Portfolio</h6>
        <h5><a href="../../index.php">MV's Atelier</a></h5>
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