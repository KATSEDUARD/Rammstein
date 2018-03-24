<?php
require 'config.php';
require_once "db.php";

ini_set('error_reporting', 0);
ini_set('display_errors', 0);

$n = 0;

if ($_POST) {
    $a = $_POST['name'];
} else {
    $a = null;
}

?>

<?php if (isset($_SESSION['logged_user'])) : ?>
<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" href="fontAwesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="css/media.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
</head>

<body>
<div class="container">
        <div class="row center">
            <img class="head col s12 m12 l12 xl12" src="images/header-ramm.png" alt="">
        </div>
        <div class="row center">
            <div class="carousel carousel-slider center" data-indicators="true">
                <div class="carousel-item white-text" href="#one!">
                    <img src="images/shop_1.jpg" alt="">
                </div>
                <div class="carousel-item white-text" href="#two!">
                    <img src="images/shop_2.jpg" alt="">
                </div>
                <div class="carousel-item white-text" href="#three!">
                    <img src="images/shop_3.jpg" alt="">
                </div>
                <div class="carousel-item white-text" href="#four!">
                    <img src="images/shop_4.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row hide-on-med-and-down">
            <div class="left">
                <p class="white-text">Login: <?php echo $_SESSION['logged_user']->login; ?></p>
                <p class="white-text">Email: <?php echo $_SESSION['logged_user']->email; ?></p>
            </div>
            <div class="right">
            <a href="logout.php" class="logout waves-effect waves-light black btn" style="border: 1px solid white;">Log Out</a>
            </div>
        </div>
        <div class="row center hide-on-med-and-down">
            <div class="divider"></div>
        </div>
        <div class="row">
            <nav class="black">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo hide-on-large-only">
                        <p class="valign-wrapper">
                            <img src="images/ramm-icon.png" alt="">ammstein
                        </p>
                    </a>
                    <ul id="nav-mobile" class="hide-on-med-and-down center">
                        <div class="row">
                            <li class="col m3 l3 xl3">
                                <a href="index.php">News</a>
                            </li>
                            <li class="col m3 l3 xl3">
                                <a href="live.php">Live</a>
                            </li>
                            <li class="col m3 l3 xl3">
                                <a href="albums.php">Albums</a>
                            </li>
                            <li class="col m3 l3 xl3">
                                <a class="action" href="#!">Shop</a>
                            </li>
                        </div>
                    </ul>
                    <ul id="slide-out" class="side-nav black">
                        <li>
                            <div class="user-view">
                                <div class="background">
                                    <img src="images/bg-pic.jpg">
                                </div>
                                <a href="#!user">
                                    <img class="circle black" src="images/person.png">
                                </a>
                                <a href="#!name">
                                    <span class="white-text name">Login: <?php echo $_SESSION['logged_user']->login; ?></span>
                                </a>
                                <a href="#!email">
                                    <span class="white-text email">Email: <?php echo $_SESSION['logged_user']->email; ?></span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a href="#!" class="waves-effect waves-red white-text">
                                <i class="material-icons white-text">mail</i>E-mail</a>
                        </li>
                        <li>
                            <div class="divider"></div>
                        </li>
                        <li>
                            <a class="subheader waves-effect waves-red white-text">Links</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-red white-text" href="index.php">
                                <i class="material-icons white-text">link</i>News</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-red white-text" href="live.php">
                                <i class="material-icons white-text">link</i>Live</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-red white-text" href="albums.php">
                                <i class="material-icons white-text">link</i>Albums</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-red white-text action-side-menu" href="#!">
                                <i class="material-icons white-text">link</i>Shop</a>
                        </li>
                        <li>
                            <div class="divider"></div>
                        </li>
                        <li>
                            <a class="waves-effect waves-light white-text" href="#!">
                                <i class="material-icons white-text">settings</i>Settings</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-light white-text" href="#!">
                                <i class="material-icons white-text">info</i>Info</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-light white-text" href="#!">
                                <i class="material-icons white-text">help</i>Help</a>
                        </li>
                        <li>
                            <a href="logout.php" class="logout waves-effect waves-light black btn" style="border: 1px solid white;">Log Out</a>
                        </li>
                    </ul>
                    <a href="#" data-activates="slide-out" class="button-collapse">
                        <i class="material-icons">menu</i>
                    </a>
                </div>
            </nav>
        </div>
<div class="row center">
    <div class="form col s12">
        <form name="myForm" action="#!" method="post">
                <span>Enter product name:</span>
                <input autocomplete="off" class="find form_item" type="text" placeholder='Search...' name="name">
                <button class="search form_item" type="submit" href="#!">
                    Search
                    <i class="fas fa-search"></i>
                </button>
        </form>
    </div>
</div>
<div class="row">
        <div class="divider"></div>
    </div>
        <div class="row">
            <div class="radio-wrapper col s12 center">
                <form name="myNewForm" action="#!" method="post">
                    <input type="radio" class="radiobutt" name="sortbut" id="radio_1" value="sort1"/>
                    <label for="radio_1" class="radio-style-label" style="color: #fff;">Sort names alphabetically</label>
                    <br>
                    <input type="radio" class="radiobutt" name="sortbut" id="radio_2" value="sort2"/>
                    <label for="radio_2" class="radio-style-label" style="color: #fff;">Sort cost by ascending</label>
                    <br>
                    <button class="search" id="but_2" type="submit">Sort</button>
                </form>
            </div>
        </div>
    <div class="row">
        <div class="divider"></div>
    </div>
<?
$radio = $_POST['sortbut'];


if($radio == 'sort1'){
    $sql = "SELECT * FROM `shop` WHERE `product`='T-shirt' ORDER BY `name` ASC";

    $r = mysql_query($sql);
    echo "<div class='row center'>";



    while ($row = mysql_fetch_array($r)) {
        echo
            "<div class='col s12 m6 l3 xl3'>
            <div class='card'>
                <div class='card-image'>
                <img src='images/$row[name].jpg'>
                <span class='card-title'>$row[name]</span>
                </div>
                <div class='card-content'>
                <p>$row[product], $row[cost]$</p>
                </div>
            </div>
            </div>";
        $n++;
    }
    echo "</div>";
}
else if($radio == 'sort2'){
    $sql = "SELECT * FROM `shop` WHERE `product`='T-shirt' ORDER BY `cost` ASC";

    $r = mysql_query($sql);
    echo "<div class='row center'>";

    while ($row = mysql_fetch_array($r)) {
        echo
            "<div class='col s12 m6 l3 xl3'>
            <div class='card'>
                <div class='card-image'>
                <img src='images/$row[name].jpg'>
                <span class='card-title'>$row[name]</span>
                </div>
                <div class='card-content'>
                <p>$row[product], $row[cost]$</p>
                </div>
            </div>
            </div>";
        $n++;
    }
    echo "</div>";
}else{
    $sql = "SELECT * FROM `shop` WHERE `product` LIKE'%$a%' OR `name` LIKE'%$a%'";

    $r = mysql_query($sql);
    echo "<div class='row center'>";

    while ($row = mysql_fetch_array($r)) {
        echo
            "<div class='col s12 m6 l3 xl3'>
            <div class='card'>
                <div class='card-image'>
                <img src='images/$row[name].jpg'>
                <span class='card-title'>$row[name]</span>
                </div>
                <div class='card-content'>
                <p>$row[product], $row[cost]$</p>
                </div>
            </div>
            </div>";
        $n++;
    }
    echo "</div>";
}
    

    if ($n == 0) {
        echo "<p class='error'>This item does not exist in the database</p>";
    }


?>


<div class="row center">
            <div class="divider"></div>
        </div>
<div class="row center">
            <footer>
                <div class="col s12 m12 l3 xl3 footer-img">
                    <img src="images/ramm-icon.png" alt="">
                </div>
                <div class="col s12 m12 l6 xl6 about-gr">
                    <p>
                    Products on offer at the RammsteinShop are intended solely for private buyers. Any redistribution of items for commercial purposes or in a commercial manner is restricted by law. More details on this can be obtained by consulting our General Terms and Conditions.</p>
                </div>
                <div class="col s12 m12 l3 xl3 links">
                    <ul>
                        <li class="link subheader">Links</li>
                        <li>
                            <i class="material-icons white-text">link</i>
                            <a href="index.php">News</a>
                        </li>
                        <li>
                            <i class="material-icons white-text">link</i>
                            <a href="live.php">Live</a>
                        </li>
                        <li>
                            <i class="material-icons white-text">link</i>
                            <a href="albums.php">Albums</a>
                        </li>
                        <li>
                            <i class="material-icons white-text">link</i>
                            <a class="action" href="#!">Shop</a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
        <div class="row center">
            <div class="divider"></div>
        </div>
        <div class="row center">
        <div class="icons">
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="#">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </div>
</div>






    <script src="js/script.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
</html>

<?php endif; ?>