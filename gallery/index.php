<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Gallery</title>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>
<body>
    <a name="Top"></a>
    <div class="menu">
        <div class="logo">
        <img src="../imgs/misc/PlaceholderLogo.png" alt="Logo-Placeholder" width="85px">
        <a href="../index.php">MV's Atelier</a>
        </div>
        <button class="menu-toggle" aria-label="Toggle menu">&#9776;</button>
        <ul id="main-menu">
            <li><a href="../index.php">Home</a></li>
            <li class="separator"> | </li>
            <li><a href="index.php">Gallery</a></li>
            <li class="separator"> | </li>
            <li><a href="../contact/index.php">Contact</a></li>
            <li class="separator"> | </li>
            <li><a href="../about/index.php">About</a></li>
        </ul>
    </div>
    <br>
    <div class="gallery-container">
        <nav class="bookmarks">
            <button data-section="school"><a href="school/index.php">School Work</a></button>
            <button data-section="commissions"><a href="commissions/index.php">Commissions</a></button>
            <button data-section="animations"><a href="animations/index.php">Animations</a></button>
            <button data-section="personal"><a href="personal/index.php">Personal Work</a></button>
        </nav>
        <div class="shelf">
            <section id="school" class="gallery-section">
                <div class="gallery-item">
                    <video src="../imgs/gallery/school/TP2-ViannaUncal.mp4" width="600px" controls></video>
                    <label for="toggle-1" class="info-button">View Details</label>
                    <input type="checkbox" id="toggle-1" class="toggle-info">
                    <div class="info-drawer">
                        <h3>Collage Animation</h3>
                        <p>The story follows an alien lifeform after it crash-lands on Earth and begins rapidly evolving, until it falls in love with a human.</p>
                        <p>Made using After Effects</p>
                        <p>Year: 2025</p>
                    </div>
                </div>
            </section>
            <br>
            <section id="commissions" class="gallery-section">
                <div class="gallery-item">
                    <img src="../imgs/gallery/commissions/Demon-Oly_Flute.png" alt="Demon Flute" width="600px">
                </div>
                <div class="gallery-item">
                    <img src="../imgs/gallery/commissions/Darcy&Hooty.png" alt="Owlphibia" height="600px">
                </div>
                <div class="gallery-item">
                    <img src="../imgs/gallery/commissions/Raknar_Juguito.png" alt="Dragonborn" width="600px">
                </div>
                <div class="gallery-item">
                    <img src="../imgs/gallery/commissions/SkeleTinch.png" alt="Fiery Skeleton" height="600px">
                </div>
            </section>
            <br>
            <section id="animations" class="gallery-section">
                <div class="gallery-item">
                    <video src="../imgs/gallery/animations/ViannaMorena_AnimacionFinal.mp4" width="600px" controls></video>
                </div>
                <div class="gallery-item">  
                    <video src="../imgs/gallery/animations/Forest-Clearing1-Anim.mp4" width="600px" controls></video>
                </div>
            </section>
            <br>
            <section id="personal" class="gallery-section">
                <div class="gallery-item">
                    <img src="../imgs/gallery/commissions/DreamNightmare_Lycanthropes1.png" alt="Two Wolves 1" height="600px">
                </div>
                <div class="gallery-item">
                    <img src="../imgs/gallery/commissions/DreamNightmare_Lycanthropes2.png" alt="Two Wolves 2" height="600px">
                </div>
                <div class="gallery-item">
                    <img src="../imgs/gallery/commissions/Voltron 2.png" alt="Voltron Gift" width="600px">
                </div>
                <div class="gallery-item">
                    <img src="../imgs/gallery/personal/BobaFett ShirtDesign.png" alt="Boba Fett Shirt Design" height="600px">
                </div>
            </section>
        <img src="../imgs/misc/nature/Black_mushrooms1_ground_shadow.png" alt="Black Mushrooms" class="deco" id="mushroom-2">
        <img src="../imgs/misc/nature/Black_mushrooms2_ground_shadow.png" alt="Black Mushrooms" class="deco" id="mushroom-3">
        </div>
        <img src="../imgs/misc/nature/Liana_bridges2_grass_shadow.png" alt="Liana Bridges" class="deco" id="liana-1">
        <img src="../imgs/misc/nature/Liana_bridges5_grass_shadow.png" alt="Liana Bridges" class="deco" id="liana-2">
    </div>
    <br>
    <p><a href="#Top">Back to Top</a></p>
    <hr>
    <div class="footer">
        <div class="content">
        <h6>Portfolio</h6>
        <h5><a href="../index.php">MV's Atelier</a></h5>
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