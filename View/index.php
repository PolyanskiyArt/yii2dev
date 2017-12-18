<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../View/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../View/css/nouislider.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../View/css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<nav>
    <div class="container">
        <div class="nav-wrapper">
            <a href="/View" class="brand-logo"><img src="../View/Logo_2.png" height="64" width="64"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse">
                <i class="material-icons">dehaze</i></a>
            <ul class="brand-logo center">
                <li>
                    <form>
                        <div class="input-field">
                            <input type="search" required id="search" size="20">
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        </div>
                    </form>
                </li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a class="dropdown-button" href="#!" data-activates="main-menu">
                        Имя
                    <i class="material-icons right">menu</i>
                    </a>
                </li>
                <li><a class="modal-trigger" href="#modal-login">Войти</a></li>
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
                <li><a href="../View/Help"><i class="material-icons">headset_mic</i>Служба поддержки</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <nav style="background: white; margin-top: 10px;">
            <div class="nav-wrapper">
                <div class="container">
                <ul class="left hide-on-med-and-down collapsible" style="color: black; height: 50px" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header" style="height: 51px;">
                            <i class="material-icons right" style="line-height: 20px">straighten</i>Размер
                        </div>
                        <div class="collapsible-body" style="background: #e4e4e4">
                            <div class="row" style="width: 300px">
                               <div id="noUiSlider"></div>
                            </div>
                        </div>
                    </li>
                </ul>
                    <ul class="left hide-on-med-and-down collapsible" style="color: black; height: 50px" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header" style="height: 51px;">
                                <i class="material-icons right" style="line-height: 20px">filter_vintage</i>Количество
                            </div>
                            <div class="collapsible-body" style="background: #e4e4e4">
                                <div class="row" style="width: 300px">
                                    <div id="noUiSlider"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="left hide-on-med-and-down collapsible" style="color: black; height: 50px" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header" style="height: 51px;">
                                <i class="material-icons right" style="line-height: 20px">attach_money</i>Цена
                            </div>
                            <div class="collapsible-body" style="background: #e4e4e4">
                                <div class="row" style="width: 300px">
                                    <div id="noUiSlider"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header">
                <div class="container">
                    <div class="row">
                        <div class="col s3 center-align"><b>Farm</b></div>
                        <div class="col s2 center-align"><b>Variety</b></div>
                        <div class="col s2 center-align"><b>Length</b></div>
                        <div class="col s1 center-align"><b>Stems</b></div>
                        <div class="col s1 center-align"><b>Price</b></div>
                        <div class="col s1 center-align"><b>Total</b></div>
                        <div class="col s2 center-align"></div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="collapsible-header">
                <div class="container">
                    <div class="row">
                <div class="col s3 center-align">Stampsy</div>
                <div class="col s2 center-align">checkmate</div>
                <div class="col s2 center-align">110cm</div>
                <div class="col s1 center-align">175</div>
                <div class="col s1 center-align">0.75</div>
                <div class="col s1 center-align">200.00</div>
                <div class="col s2 center-align"><span class="new badge red" data-badge-caption="">0</span></div>
                    </div>
                </div>
            </div>
            <div class="collapsible-body">
                <div class="row">
                    <div class="col s2 offset-s3" style="padding-top: 15px">
                        Сколько добавить к заказу?
                    </div>
                <div class="col s2">
                    <input  type="number" size="3" name="num" min="0" value="1">
                </div>
                    <div class="col s2" style="padding-top: 10px"><button class="btn waves-effect waves-light" type="submit" name="action">Add
                        <i class="material-icons right">add</i>
                    </button>
                    </div>
                </div>
            </div>
        </li>
        <?php
        for($i=0; $i < 587; $i++)
        print_r ("<li>
            <div class=\"collapsible-header\">
                <div class=\"container\">
                    <div class=\"row\">
                <div class=\"col s3 center-align\">Stampsy</div>
                <div class=\"col s2 center-align\">checkmate</div>
                <div class=\"col s2 center-align\">110cm</div>
                <div class=\"col s1 center-align\">175</div>
                <div class=\"col s1 center-align\">0.75</div>
                <div class=\"col s1 center-align\">200.00</div>
                <div class=\"col s2 center-align\"><span class=\"new badge red\" data-badge-caption=\"\">0</span></div>
                    </div>
                </div>
            </div>
            <div class=\"collapsible-body\">
                <div class=\"row\">
                    <div class=\"col s2 offset-s3\" style=\"padding-top: 15px\">
                        Сколько добавить к заказу?
                    </div>
                <div class=\"col s2\">
                    <input  type=\"number\" size=\"3\" name=\"num\" min=\"0\" value=\"1\">
                </div>
                    <div class=\"col s2\" style=\"padding-top: 10px\"><button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Add
                        <i class=\"material-icons right\">add</i>
                    </button>
                    </div>
                </div>
            </div>
        </li>");
        ?>
    </ul>
</div>
<ul id="main-menu" class="dropdown-content">

    <li><a href="../View"><i class="material-icons">home</i>Главная</a></li>
    <li><a href="../View/Profile"><i class="material-icons">account_circle</i>Мой профиль</a></li>
    <li><a href="../View/Orders"><i class="material-icons">assignment</i>Мои заказы</a></li>
    <li><a href="../View/Shopcart"><i class="material-icons">shopping_cart</i>Моя корзина</a></li>
    <li class="divider"></li>
    <li><a href="../View/Help"><i class="material-icons">headset_mic</i>Служба поддержки</a></li>
</ul>

<ul id="straighten-menu" class="dropdown-content">

    <li><input type="text"><input type="text"></li>
    <li><a href="../View/Profile"><i class="material-icons">account_circle</i>Мой профиль</a></li>
    <li><a href="../View/Orders"><i class="material-icons">assignment</i>Мои заказы</a></li>
    <li><a href="../View/Shopcart"><i class="material-icons">shopping_cart</i>Моя корзина</a></li>
    <li class="divider"></li>
    <li><a href="../View/Help"><i class="material-icons">headset_mic</i>Служба поддержки</a></li>
</ul>


<div id="modal-login" class="modal">
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
<script type="text/javascript" src="../View/js/nouislider.js"></script>
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
    })
</script>

<script>
    var slider = document.getElementById('noUiSlider');
    noUiSlider.create(slider, {
        start: [20, 80],
        connect: true,
        step: 1,
        orientation: 'horizontal', // 'horizontal' or 'vertical'
        range: {
            'min': 0,
            'max': 100
        },
        format: wNumb({
            decimals: 0
        })
    });</script>
</body>
</html>