<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<nav>
    <div class="container">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img src="ic_head_logo.svg" height="64" width="64"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse">
                <i class="material-icons">dehaze</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/login">Home</a></li>
                <li><a href="Cards.php">Cards</a></li>
                <li><a href="/Carousel.php">Carousel</a></li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdown1">
                        Myfirstname
                    <i class="material-icons right">arrow_drop_down</i>
                    </a>

                </li>
                <li><a class="modal-trigger" href="#modal1">Sign in</a></li>
            </ul>

            <ul class="side-nav" id="mobile-demo">
                <li><a href="/Home.php">Home</a></li>
                <li><a href="Cards.php">Cards</a></li>
                <li><a href="/Carousel.php">Carousel</a></li>
                <li><a class="modal-trigger" href="#modal1">Sign in</a></li>
            </ul>
        </div>
    </div>
</nav>

<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>

<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center-align">Authorization</h4></div>
    <div class="modal-body">
        <div class="row">
            <form class="col s12">
                <div class="row">

                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input class="validate" type="text" placeholder="Login" id="login">
                        <label for="login">Login</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input  type="password" placeholder="Password" id="password">
                        <label for="login">Password</label>
                    </div>
                    <div class="col s6">
                        <input type="checkbox" id="remember" name="_remember_me" />
                        <label for="remember" id="">Remember me?</label>
                    </div>
                    <div class="col s6 right-align">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script>$(document).ready(function(){
        $(".button-collapse").sideNav();
        $(".modal").modal();
        $(".carousel.carousel-slider").carousel({
            fullWidth:true,
            indicators:true,
            noWrap:true
        });
        $(".dropdown-button").dropdown();
    })</script>
</body>
</html>