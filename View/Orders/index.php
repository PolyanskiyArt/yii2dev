<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/View/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="/View/css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<nav>
    <div class="container">
        <div class="nav-wrapper">
            <a href="/View" class="brand-logo"><img src="/View/Logo_2.png" height="64" width="64"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse">
                <i class="material-icons">dehaze</i></a>
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
                <li><a href="/View"><i class="material-icons">home</i>Главная</a></li>
                <li><a href="/View/Profile"><i class="material-icons">account_circle</i>Мой профиль</a></li>
                <li><a href="/View/Orders"><i class="material-icons">assignment</i>Мои заказы</a></li>
                <li><a href="/View/Shopcart"><i class="material-icons">shopping_cart</i>Моя корзина</a></li>
                <li class="divider"></li>
                <li><a href="/View/Help"><i class="material-icons">headset_mic</i>Служба поддержки</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <h5 class="center-align"><i class="material-icons">assignment</i> Список ваших заказов</h5>
    <div class="row"></div>
    <ul class="collapsible" data-collapsible="accordion">
        <?php
        for($i=0; $i < 5; $i++)
            print_r (" 
      <li>
            <div class=\"collapsible-header\">
                <div class=\"container\">
                    <div class=\"row\">
                <div class=\"col s5\">21.12.2019</div>
                <div class=\"col s5 center-align\">123500 руб.</div> 
                 <div class=\"col s2 center-align\"><span class=\"new badge red\" data-badge-caption=\"\">Завершен</span></div>             
                    </div>
                </div>
            </div>
            <div class=\"collapsible-body\">              
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col s3 left-align\"><b>Total Stems:</b></div>
                        <div class=\"col s2 center-align\">7240</div>
                        <div class=\"col s2 center-align\"></div>
                        <div class=\"col s2 left-align\"><b>Subtotal:</b></div>
                        <div class=\"col s1 center-align\">3314.25</div>
                        <div class=\"col s2 center-align\"></div>
                    </div>
                     <div class=\"row\">
                        <div class=\"col s3 left-align\"><b>Weight</b></div>
                        <div class=\"col s2 center-align\">698 KG</div>
                        <div class=\"col s2 center-align\"></div>
                        <div class=\"col s2 left-align\"><b>Shipping:</b></div>
                        <div class=\"col s1 center-align\">3314.25</div>
                        <div class=\"col s2 center-align\"></div>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col s3 left-align\"><b>Total Boxes:</b></div>
                        <div class=\"col s2 center-align\">12.00</div>
                        <div class=\"col s2 center-align\"></div>
                        <div class=\"col s2 left-align\"><b>Commission:</b></div>
                        <div class=\"col s1 center-align\">240.00</div>
                        <div class=\"col s2 center-align\"></div>
                    </div>
                </div>  
                  <div class=\"row center-align\"><a href=\"#\">Полная выписка</a> </div>        
            </div>
        </li>
    ");
        ?>
        <li>
            <div class="collapsible-header">
                <div class="container">
                    <div class="row">
                        <div class="col s5">20.10.2017</div>
                        <div class="col s5 center-align">500000 руб.</div>
                        <div class="col s2 left-align"><span class="new badge green" data-badge-caption="">Активен</span></div>
                    </div>
                </div>
            </div>
            <div class="collapsible-body">
                <div class="container">
                    <div class="row">
                        <div class="col s3 left-align"><b>Total Stems:</b></div>
                        <div class="col s2 center-align">7240</div>
                        <div class="col s2 center-align"></div>
                        <div class="col s2 left-align"><b>Subtotal:</b></div>
                        <div class="col s1 center-align">3314.25</div>
                        <div class="col s2 center-align"></div>
                    </div>
                    <div class="row">
                        <div class="col s3 left-align"><b>Weight</b></div>
                        <div class="col s2 center-align">698 KG</div>
                        <div class="col s2 center-align"></div>
                        <div class="col s2 left-align"><b>Shipping:</b></div>
                        <div class="col s1 center-align">3314.25</div>
                        <div class="col s2 center-align"></div>
                    </div>

                    <div class="row">
                        <div class="col s3 left-align"><b>Total Boxes:</b></div>
                        <div class="col s2 center-align">12.00</div>
                        <div class="col s2 center-align"></div>
                        <div class="col s2 left-align"><b>Commission:</b></div>
                        <div class="col s1 center-align">240.00</div>
                        <div class="col s2 center-align"></div>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <div class="row">
        <form class="col s12 right-align">
            <button class="btn waves-effect waves-blue" type="submit" name="action">Оформить заказ
                <i class="material-icons right">assignment</i>
            </button>
        </form>
    </div>
</div>
<ul id="main-menu" class="dropdown-content">

    <li><a href="/View"><i class="material-icons">home</i>Главная</a></li>
    <li><a href="/View/Profile"><i class="material-icons">account_circle</i>Мой профиль</a></li>
    <li><a href="/View/Orders"><i class="material-icons">assignment</i>Мои заказы</a></li>
    <li><a href="/View/Shopcart"><i class="material-icons">shopping_cart</i>Моя корзина</a></li>
    <li class="divider"></li>
    <li><a href="/View/Help"><i class="material-icons">headset_mic</i>Служба поддержки</a></li>
</ul>

<ul id="straighten-menu" class="dropdown-content">

    <li><input type="text"><input type="text"></li>
    <li><a href="/View/Profile"><i class="material-icons">account_circle</i>Мой профиль</a></li>
    <li><a href="/View/Orders"><i class="material-icons">assignment</i>Мои заказы</a></li>
    <li><a href="View/Shopcart"><i class="material-icons">shopping_cart</i>Моя корзина</a></li>
    <li class="divider"></li>
    <li><a href="/View/Help"><i class="material-icons">headset_mic</i>Служба поддержки</a></li>
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
<script type="text/javascript" src="/View/js/materialize.min.js"></script>
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