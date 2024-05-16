<?php require 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grillby's</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- FOR FUTURE : Kanske göra så att vissa delar av NavBaren ändrar utseende beroende om man är inloggad eller inte -->
  
    <?php require 'nav.php'; ?>
    <header id="top">
        <h1 class="center">Grillby's</h1>
        <p class="bottom-left">Open from 12am to 11pm</p>
        <p class="bottom-right">Snowndin, Mt Ebott</p>
    </header>
    <main>
    <section id="about">
        <div>
            <h1>About Grillby's</h1>
            <p>Grillby's is a renowned establishment within the world of Undertale, a popular indie role-playing game. Located in the bustling town of Snowdin, Grillby's is a warm and welcoming tavern frequented by both humans and monsters alike. The tavern's ambiance is cozy, with dim lighting and a comforting atmosphere that invites patrons to relax and unwind.
                At the heart of Grillby's is its enigmatic owner, Grillby himself. Grillby is a unique character in Undertale, depicted as a humanoid figure made entirely of flames. Despite his fiery appearance, Grillby exudes a calm and amiable demeanor, earning him the respect and admiration of the townsfolk.
                As the proprietor of Grillby's, Grillby is not only responsible for tending to the tavern but also for ensuring that his guests feel at home. He is known for his excellent service, serving up delicious meals and refreshing drinks to satisfy the diverse tastes of his clientele. Grillby's establishment serves as a hub for social interaction, where individuals from all walks of life gather to share stories, laughter, and camaraderie.
                Beyond his role as a business owner, Grillby is also a respected member of the community, offering support and guidance to those in need. Despite his limited dialogue in the game, Grillby's presence leaves a lasting impression, symbolizing warmth, hospitality, and a sense of belonging within the world of Undertale.
            </p>
        </div>
        <div>
            <p>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</p>
            <p>Chef, Bartender and Owner: Grillby</p>
        </div>
        <img src="img\grillby.gif" id="grillbyImage" alt="Grillby">
        <div>
            <p>Opening hours: everyday from 12am to 11pm.</p>
            <p>Address: Snowdin, Mt Ebott, Undertale</p>
        </div>
    </section>
    <section id="menu">
    <?php 
        require_once("menu.php")
    ?>

        <img src="img/bar.jpg" id="barImage" alt="Bar">
    </section>
    <section id="where">
        <div>
            <h1>Where to find us</h1>
            <p>We are here</p>
            <img src="img\map.ong.png" id="mapImage" alt="Map">
        </div>
    </section>
    </main>
</body>
<script src="script.js"></script>
</html>