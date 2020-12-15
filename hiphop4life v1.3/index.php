<?
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
$strona = "/html/glowna.html";
if($_GET['idp'] == 'artysci') $strona = "/html/artysci.html";
else if($_GET['idp'] == 'galeria') $strona = "/html/galeria.html";
else if($_GET['idp'] == 'kontakt') $strona = "/html/kontakt.html";
else if($_GET['idp'] == 'o-nas') $strona = "/html/o-nas.html";
else if($_GET['idp'] == 'filmy') $strona = "/html/filmy.html";

if (file_exists(dirname(__FILE__).$strona)) {
    echo "The file $strona exists";
} else {
    echo "The file $strona does not exist";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HIPHOP 4ever</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/2ca8cb4996.js"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">

</head>
<body id="body">
    <div class="wrapper">

        <header class="header">
            <div class="watch-date">
                <div id="watch" class="watch"></div>
                <div class="date" id="date"></div>
            </div>
            <img src="img/logo.png" alt="" class="logo">
            <div class="darkmode" id="darkmode">
                <button class="dark-mode btn-animated">DarkMode</button>
            </div>
        </header>
        <nav>
            <button class="hamburger" id="hamburger">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="nav-ul" id="nav-ul">
                <li><a href="index.php?idp=glowna">Strona Główna</a></li>
                <li><a href="index.php?idp=artysci">Artyści</a></li>
                <li><a href="index.php?idp=galeria">Galeria</a></li>
                <li><a href="index.php?idp=o-nas">O nas</a></li>
                <li><a href="index.php?idp=kontakt">Kontakt</a></li>
                <li><a href="index.php?idp=filmy">Filmy</a></li>
            </ul>
        </nav>

        <div class="content">
            <? include(dirname(__FILE__).$strona)?>


        </div>
        <footer class="footer">
            <img src="/hiphop4life v1.3/img/breakdance.png" alt="" class="footer-img">
            <img src="/hiphop4life v1.3/img/breakdance.png" alt="" class="footer-img">
            <img src="/hiphop4life v1.3/img/breakdance.png" alt="" class="footer-img">
            <img src="/hiphop4life v1.3/img/breakdance.png" alt="" class="footer-img">
        </footer>
    </div>



<script src="/hiphop4life v1.3/scripts/hamburger.js"></script>
<script src="/hiphop4life v1.3/scripts/darkMode.js"></script>
<script src="/hiphop4life v1.3/scripts/timedate.js"></script>
</body>
</html>

<?
$nr_indeksu = '150845';
$nrGrupy = '6';
echo 'Maksymilian Wrobel ' .$nr_indeksu. ' grupa ' .$nrGrupy. '';
?>
