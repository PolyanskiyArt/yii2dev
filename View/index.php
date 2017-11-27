<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../View/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../View/css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<nav>
    <div class="container">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img src="../View/ic_head_logo.svg" height="64" width="64"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse">
                <i class="material-icons">dehaze</i></a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a class="dropdown-button" href="#!" data-activates="main-menu">
                        Testname
                    <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li><a class="modal-trigger" href="#modal1">Войти</a></li>
            </ul>

            <ul class="side-nav" id="mobile-demo">
                <li><div class="user-view">
                        <div class="background">
                            <img src="images/avatar.png">
                        </div>
                        <a href="#!user"><img class="circle" src="images/avatar.png"></a>
                        <a href="#!name"><span class="white-text name">Test name</span></a>
                        <a href="#!email"><span class="white-text email">test@gmail.com</span></a>
                    </div></li>
                <li><a href="../View"><i class="material-icons">home</i>Главная</a></li>
                <li><a href="../View/Profile"><i class="material-icons">account_circle</i>Мой профиль</a></li>
                <li><a href="../View/Orders"><i class="material-icons">assignment</i>Мои заказы</a></li>
                <li><a href="../View/Shopcart"><i class="material-icons">shopping_cart</i>Моя корзина</a></li>
                <li class="divider"></li>
                <li><a href="../View/Settings"><i class="material-icons">settings</i>Настройки</a></li>
                <li class="divider"></li>
                <li><a href="../View/Help"><i class="material-icons">headset_mic</i>Служба поддержки</a></li>
            </ul>
        </div>
    </div>
</nav>

<ul id="main-menu" class="dropdown-content">

    <li><a href="../View"><i class="material-icons">home</i>Главная</a></li>
    <li><a href="../View/Profile"><i class="material-icons">account_circle</i>Мой профиль</a></li>
    <li><a href="../View/Orders"><i class="material-icons">assignment</i>Мои заказы</a></li>
    <li><a href="../View/Shopcart"><i class="material-icons">shopping_cart</i>Моя корзина</a></li>
    <li class="divider"></li>
    <li><a href="../View/Settings"><i class="material-icons">settings</i>Настройки</a></li>
    <li class="divider"></li>
    <li><a href="../View/Help"><i class="material-icons">headset_mic</i>Служба поддержки</a></li>
</ul>


<div id="modal1" class="modal">
    <div class="container">
    <div class="modal-content">
        <h4 class="center-align">Авторизация</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input class="validate" type="text" placeholder="Login" id="login">
                        <label for="login">Логин</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input  type="password" placeholder="Password" id="password">
                        <label for="login">Пароль</label>
                    </div>
                    <div class="col s6">
                        <input type="checkbox" id="remember" name="_remember_me" />
                        <label for="remember" id="">Запомнить?</label>
                    </div>
                    <div class="col s6 right-align">
                        <a href="#!" type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Войти</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>

<?php



if ($_GET['login']=="test" && $_GET['password']=="psdtest")
{
    header('Location:Profile/');
}
?>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../View/js/materialize.min.js"></script>
<script>$(document).ready(function(){
        $(".button-collapse").sideNav();
        $(".modal").modal();
        $(".carousel.carousel-slider").carousel({
            fullWidth:true,
            indicators:true,
            noWrap:true
        });
        $(".dropdown-button").dropdown(
            {
               constrainWidth: false,
               belowOrigin: true,
            }
        );
    })</script>
</body>
</html>