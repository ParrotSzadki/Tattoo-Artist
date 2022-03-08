<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Got random tattoo!</title>
    <?php
    include "styl.php"
    ?>
</head>
<body class="Site">
<header>
    <?php
        include "menu.php";
    ?>
</header>
<main class="Site-content1">
    <div>
        <div class="randomGallery">
            <?php
            $var = rand(1,4);
            if ($var == 1){
                echo '<img  src =jpgs/free1.jpg. />';
            }
            if ($var == 2) {
                echo '<img src =jpgs/free2.jpg />';
            }
            if ($var == 3) {
                echo '<img src =jpgs/free3.jpg />';
            }
            if ($var == 4) {
                echo '<img src =jpgs/free4.jpg />';
            }
            ?>
        </div>
        <form>
            <input class="randombutton" type="button" value="One more time!" onClick="window.location.reload()">
        </form>
    </div>

</main>
<footer>
    Follow me: <br>
    <a href="https://www.facebook.com/profile.php?id=100072583119282" target="_blank">
        <img src="jpgs/fb.jpg" width="17px" height="17px">
    </a>
    <a href="https://www.instagram.com/safari__tattoo/" target="_blank">
        <img src="jpgs/insta.jpg" width="17px" height="17px">
    </a>
</footer>
</body>
