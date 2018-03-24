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
                    <img src="images/show2.jpg" alt="">
                </div>
                <div class="carousel-item white-text" href="#two!">
                    <img src="images/show1.jpg" alt="">
                </div>
                <div class="carousel-item white-text" href="#three!">
                    <img src="images/show3.jpg" alt="">
                </div>
                <div class="carousel-item white-text" href="#four!">
                    <img src="images/show4.png" alt="">
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
                                <a class="action" href="#!">News</a>
                            </li>
                            <li class="col m3 l3 xl3">
                                <a href="live.php">Live</a>
                            </li>
                            <li class="col m3 l3 xl3">
                                <a href="albums.php">Albums</a>
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
                            <a class="waves-effect waves-red white-text action-side-menu" href="#!">
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
                <img src="images/ferdinand.jpg" alt="">
            </div>
            <div class="col s12 m8 l8 xl8 descr">
                <span class="grey-text left">Jan 10, 2018</span>
                <br>
                <p>Rammstein is one of this year's winners of the monument award, the Ferdinand von Quast Medal. The award honors
                    individuals and institutions that have made a special contribution to the preservation of monuments in
                    Berlin. Dr. Klaus Lederer, the culture senator, awarded the prize to Rammstein in Berlin's City Hall
                    (Rotes Rahaus). It was awarded for the contribution Rammstein made to renovating and repurposing an industrial
                    hall on the former Bergmann-Borsig grounds in Berlin-Pankow.</p>
            </div>
        </div>
        <div class="row center">
            <div class="divider"></div>
        </div>
        <div class="row center">
            <div class="col s12 m4 l4 xl4 img background">
                <img src="images/pop-cult-prize.png" alt="">
            </div>
            <div class="col s12 m8 l8 xl8 descr">
                <span class="grey-text left">Sep 12, 2017</span>
                <br>
                <p>Rammstein receive the Pop Culture Prize in the category "most impressive live show". Flake accepts the band's
                    award at the awards ceremony in Berlin's Tempodrom on September 8, 2017. The Pop Culture Prize is awarded
                    by the "Verein zur Forderung der Popkultur" (Association for the Advancement of Pop Culture) for outstanding
                    merits and achievements in various area of pop culture.</p>
            </div>
        </div>
        <div class="row center">
            <div class="divider"></div>
        </div>
        <div class="row center">
            <div class="col s12 m4 l4 xl4 img background">
                <img src="images/paris_film.jpg" alt="">
            </div>
            <div class="col s12 m8 l8 xl8 descr">
                <span class="grey-text left">Mar 7, 2017</span>
                <br>
                <p>Win 2 tickets for you and a friend to the "Rammstein: Paris" world premiere at the Volksbuhne in Berlin,
                    including accommodation and travel! Follow the link and the instructions, spread the word about the film
                    and win the chance to be part of the first ever screening on March 16th! The competition ends on March
                    10th at 5 pm CET. The winners will be notified via e-mail.</p>
            </div>
        </div>
        <div class="row center">
            <div class="divider"></div>
        </div>
        <div class="row center">
            <div class="col s12 m4 l4 xl4 img background">
                <img src="images/new-york.jpg" alt="">
            </div>
            <div class="col s12 m8 l8 xl8 descr">
                <span class="grey-text left">Dec 12, 2016</span>
                <br>
                <p>Rammstein play their only U.S. East Coast date of 2017 on June 25th at Jones Beach Theater, NY! Tickets go
                    on sale December 17th at 10am (EST)!</p>
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
                        Rammstein is a German rock band, formed in 1994 in Berlin. Throughout its existence, Rammstein's six-man lineup has remained
                        unchanged—lead guitarist Richard Z. Kruspe, bassist Oliver "Ollie" Riedel, drummer Christoph "Doom"
                        Schneider, lead vocalist Till Lindemann, rhythm guitarist Paul H. Landers, and keyboardist Christian
                        "Flake" Lorenz.</p>
                </div>
                <div class="col s12 m12 l3 xl3 links">
                    <ul>
                        <li class="link subheader">Links</li>
                        <li>
                            <i class="material-icons white-text">link</i>
                            <a class="action" href="#">News</a>
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




    <!--Import jQuery before materialize.js-->
    <script src="js/script.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>

</html>














<?php else : ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Sign Up or Log In</title>
</head>
<body>


<div class="container-fluid">
    <div class="question">
        <div class="row">
            <div class="signup col s12 m6 l6 xl6">
                <p class="header">Sign Up</p>
                <a href="signup.php"><i class="fas fa-user-plus"></i> Join to Ramm-family!</a>
            </div>
            <div class="login col s12 m6 l6 xl6">
                <p class="header">Already have an account?</p>
                <a href="login.php">Log In <i class="fas fa-sign-in-alt"></i></a>
            </div>
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
