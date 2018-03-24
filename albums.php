<?php
require "db.php";
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
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/albums.css">
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
                    <img src="images/al_1.jpg" alt="">
                </div>
                <div class="carousel-item white-text" href="#two!">
                    <img src="images/al_2.jpg" alt="">
                </div>
                <div class="carousel-item white-text" href="#three!">
                    <img src="images/al_3.jpg" alt="">
                </div>
                <div class="carousel-item white-text" href="#four!">
                    <img src="images/al_3.jpeg" alt="">
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
                                <a class="action" href="#!">Albums</a>
                            </li>
                            <li class="col m3 l3 xl3">
                                <a href="shop.php">Shop</a>
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
                            <a class="waves-effect waves-red white-text action-side-menu" href="#!">
                                <i class="material-icons white-text">link</i>Albums</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-red white-text" href="shop.php">
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
    <div class="col s12 m4 l4 xl4 img background">
                <img src="images/Rammstein_Herzeleid.jpg" alt="">
            </div>
            <div class="col s12 m8 l8 xl8 descr">
                <span class="grey-text left">Sep 29, 1995</span>
                <br>
                <p>
                    Herzeleid is the debut album by German Neue Deutsche Harte band Rammstein. It was released on 29 September 1995.
                </p>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><span><i class="fas fa-headphones"></i>   Listen to Herzeleid</span></div>
                        <div class="collapsible-body">
                            <p>Rammstein - Wollt Ihr Das Bett In Flammen Sehen</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/herzeleid/Rammstein - Wollt Ihr Das Bett In Flammen Sehen (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Der Meister</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/herzeleid/rammstein_der_meister_(NaitiMP3.ru).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Weisses Fleisch</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/herzeleid/rammstein_weisses_fleisch_(NaitiMP3.ru).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Asche zu Asche</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/herzeleid/Rammstein - Asche Zu Asche.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Seemann</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/herzeleid/rammstein_seemann_(NaitiMP3.ru).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Du riechst so gut</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/herzeleid/Rammstein - Du Riechst So Gut '98 (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Das alte Leid</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/herzeleid/rammstein_das_alte_leid_(NaitiMP3.ru).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Heirate mich</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/herzeleid/Rammstein - Heirate Mich (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Herzeleid</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/herzeleid/rammstein_herzeleid_live_aus_berlin_limited_editition_cd1_1999_(NaitiMP3.ru).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Laichzeit</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/herzeleid/rammstein-laichzeit-(best-muzon.cc).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Rammstein</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/herzeleid/Rammstein - Rammstein (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
    </div>
    <div class="row center">
        <div class="divider"></div>
    </div>
    <div class="row center">
    <div class="col s12 m4 l4 xl4 img background">
                <img src="images/Rammstein-Sehnsucht.jpg" alt="">
            </div>
            <div class="col s12 m8 l8 xl8 descr">
                <span class="grey-text left">Aug 25, 1997</span>
                <br>
                <p>
                Sehnsucht is the second studio album by German industrial metal band Rammstein, released on 25 August 1997.
                </p>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><span><i class="fas fa-headphones"></i>   Listen to Sehnsucht</span></div>
                        <div class="collapsible-body">
                            <p>Rammstein - Sehnsucht</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/sehnsucht/Rammstein - Sehnsucht.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Engel</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/sehnsucht/Rammstein - Engel (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Tier</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/sehnsucht/rammstein_tier_(NaitiMP3.ru).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Bestrafe mich</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/sehnsucht/04_rammstein_bestrafe_mich_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Du hast</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/sehnsucht/rammstein-du-hast-(best-muzon.cc).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Buck dich</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/sehnsucht/Rammstein - Buck Dich.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Spiel mit mir</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/sehnsucht/rammstein-spiel-mit-mir-(best-muzon.cc).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Klavier</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/sehnsucht/08_rammstein_klavier_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Alter Mann</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/sehnsucht/09_rammstein_alter_mann_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Eifersuch</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/sehnsucht/10_rammstein_eifersucht_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Kuss mich</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/sehnsucht/13_rammstein_kuss_mich_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
    </div>
    <div class="row center">
        <div class="divider"></div>
    </div>
    <div class="row center">
    <div class="col s12 m4 l4 xl4 img background">
                <img src="images/Mutter.jpg" alt="">
            </div>
            <div class="col s12 m8 l8 xl8 descr">
                <span class="grey-text left">Apr 2, 2001</span>
                <br>
                <p>
                Mutter is the third album by Neue Deutsche Harte band Rammstein. It was released on 2 April 2001 through Motor Music. The album's cover image is a photograph of a dead fetus, which was taken by Daniel & Geo Fuchs. Overall the album has spawned six singles which is, by far, the most singles released from any Rammstein album.
                </p>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><span><i class="fas fa-headphones"></i>   Listen to Mutter</span></div>
                        <div class="collapsible-body">
                            <p>Rammstein - Mein Herz brennt</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/mutter/Rammstein - Mein Herz Brennt (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Links 2-3-4</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/mutter/links-2-3-4.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Sonne</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/mutter/Rammstein - Sonne (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Ich will</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/mutter/rammstein-ich-will-(best-muzon.cc).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Feuer frei!</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/mutter/05_rammstein_feuer_frei_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Mutter</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/mutter/rammstein-mutter-(best-muzon.cc).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Spieluhr</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/mutter/rammstein-spieluhr-(best-muzon.cc).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Zwitter</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/mutter/rammstein-zwitter-(best-muzon.cc).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Rein raus</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/mutter/Rammstein - Rein Raus.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Adios</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/mutter/10_rammstein_adios_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Nebel</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/mutter/11_rammstein_nebel_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
    </div>
    <div class="row center">
        <div class="divider"></div>
    </div>
    <div class="row center">
    <div class="col s12 m4 l4 xl4 img background">
                <img src="images/ReiseReise.jpg" alt="">
            </div>
            <div class="col s12 m8 l8 xl8 descr">
                <span class="grey-text left">Sep 27, 2004</span>
                <br>
                <p>
                    Reise, Reise is Neue Deutsche Harte band Rammstein's fourth studio album. It was released on 27 September 2004 in Germany and followed shortly by its release across Europe. It was released in North America on 16 November 2004.
                </p>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><span><i class="fas fa-headphones"></i>   Listen to Reise, Reise!</span></div>
                        <div class="collapsible-body">
                            <p>Rammstein - Reise, Reise!</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/reise_reise/Rammstein - Reise, Reise.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Mein Teil</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/reise_reise/03_rammstein_mein_teil_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Dalai Lama</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/reise_reise/Rammstein - Dalai Lama (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Keine Lust</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/reise_reise/Rammstein - Keine lust.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Los</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/reise_reise/Rammstein - Los.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Amerika</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/reise_reise/07_rammstein_amerika_myzuka.me.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Moskau</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/reise_reise/08_rammstein_moskau_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Morgenstern</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/reise_reise/09_rammstein_morgenstern_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Stein um Stein</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/reise_reise/Rammstein - Stein Um Stein (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Ohne dich</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/reise_reise/Rammstein - Ohne Dich.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Amour</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/reise_reise/12_rammstein_amour_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
    </div>
    <div class="row center">
        <div class="divider"></div>
    </div>
    <div class="row center">
    <div class="col s12 m4 l4 xl4 img background">
                <img src="images/rosenrot.jpg" alt="">
            </div>
            <div class="col s12 m8 l8 xl8 descr">
                <span class="grey-text left">Oct 28, 2005</span>
                <br>
                <p>
                    Rosenrot is the fifth album by German Neue Deutsche Harte band Rammstein, released on 28 October 2005. As of February 2006, the album has shipped 1 million copies globally.
                </p>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><span><i class="fas fa-headphones"></i>   Listen to Rosenrot</span></div>
                        <div class="collapsible-body">
                            <p>Rammstein - Benzin</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/rosenrot/01_rammstein_benzin_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Mann gegen Mann</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/rosenrot/Rammstein - Mann gegen man.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Rosenrot</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/rosenrot/Rammstein - Rosenrot.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Spring</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/rosenrot/04_rammstein_spring_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Wo bist du?</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/rosenrot/05_rammstein_wo_bist_du_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Stirb nicht vor mir</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/rosenrot/Rammstein - Stirb nicht vor mir.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Zerstoren</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/rosenrot/Rammstein - Zerstoren (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Hilf mir</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/rosenrot/08_rammstein_hilf_mir_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Te quiero puta!</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/rosenrot/rammstein-te-quiero-puta-(best-muzon.cc).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Feuer und Wasser</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/rosenrot/10_rammstein_feuer_und_wasser_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Ein Lied</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/rosenrot/Rammstein - Ein Lied (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
    </div>
    <div class="row center">
        <div class="divider"></div>
    </div>
    <div class="row center">
    <div class="col s12 m4 l4 xl4 img background">
                <img src="images/lifad.jpg" alt="">
            </div>
            <div class="col s12 m8 l8 xl8 descr">
                <span class="grey-text left">Oct 16, 2009</span>
                <br>
                <p>
                    Liebe ist fur alle da is the sixth studio album by German Neue Deutsche Harte band Rammstein, which was released in most of Europe on 16 October 2009, the United Kingdom on 19 October 2009, and the United States on 20 October 2009. By February 2010, the album sold 679,500 copies worldwide.
                </p>
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><span><i class="fas fa-headphones"></i>   Listen to Liebe ist fur alle da</span></div>
                        <div class="collapsible-body">
                            <p>Rammstein - Rammlied</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/lifad/Rammstein - Rammlied (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Ich tu dir weh</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/lifad/rammstein-ich-tu-dir-weh-(best-muzon.cc).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Waidmanns Heil</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/lifad/Rammstein - Waidmanns Heil (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Haifisch</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/lifad/rammstein_-_haifisch.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Buckstabu or B********</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/lifad/05_rammstein_b_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Fruhling in Paris</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/lifad/Rammstein - Fruhling in Paris (mixpromo.co).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Wiener Blut</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/lifad/07_rammstein_wiener_blut_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Pussy</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/lifad/rammstein_-_pussy.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Liebe ist für alle da</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/lifad/rammstein-liebe-ist-fur-alle-da-(best-muzon.cc).mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Mehr</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/lifad/10_rammstein_mehr_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                            <p>Rammstein - Roter Sand</p>
                            <p class="song">
                                <audio controls>
                                    <source src="music/lifad/11_rammstein_roter_sand_myzuka.mp3" type="audio/mpeg">
                                </audio>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
    </div>
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
                    The discography of Rammstein, a German Neue Deutsche Harte band, consists of six studio albums, two live albums, and four video albums. Rammstein has also released twenty-five singles, twenty-four of which are accompanied by music videos.</p>
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
                            <a class="action" href="#">Albums</a>
                        </li>
                        <li>
                            <i class="material-icons white-text">link</i>
                            <a href="shop.php">Shop</a>
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