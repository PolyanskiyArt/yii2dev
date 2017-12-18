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
<header>
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="/View" class="brand-logo"><img src="/View/Logo_2.png" height="64" width="64"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse">
                    <i class="material-icons">menu</i></a>

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
</header>
<main> 


<div class="container row">
        <div class="col s11 m5 l4 card small hoverable" style="margin: 30px" id="myinfo">
            <div class="card-content">
                <span class="card-title center-align"><b>Имя фамилия отчество</b></span>
                <div class="row">
                   <span class="col s12 center-align">Активный</span>
                </div>
                <div class="row"> </div>
                <div class="row">

                    <span class="col s6"><b>Регистрация:</b></span>
                    <span class="col s6 right-align">20.10.2010</span>
                </div>

                <div class="row">

                    <span class="col s6"><b>Последнее посещение:</b></span>
                    <span class="col s6 right-align">22.05.2016</span>
                </div>
                <div class="row">
                    <span class="col s6"><b>Баланс:</b></span>
                    <span class="col s6 right-align">28000</span>
                </div>
            </div>
            <div class="card-action right-align"><a href="#">Изменить пароль</a></div>
        </div>

    <div class="col s11 m5 l4 card small hoverable" style="margin: 30px" id="mydata">
        <div class="card-content">
            <span class="card-title center-align"><b>Личные данные</b></span>

            <div class="row"> </div>
            <div class="row">

                <span class="col s6"><b>Город:</b></span>
                <span class="col s6 right-align">Краснодар</span>
            </div>

            <div class="row">
                <span class="col s6"><b>Количество заказов:</b></span>
                <span class="col s6 right-align">22</span>
            </div>
            <div class="row">
                <span class="col s6"><b>Сумма расходов:</b></span>
                <span class="col s6 right-align">42000</span>
            </div>
            <div class="row">
                <span class="col s6"><b>Дата последнего заказа:</b></span>
                <span class="col s6 right-align">13.07.2017</span>
            </div>
        </div>
        <div class="card-action right-align"><a href="#">Мои заказы</a></div>
    </div>

    <div class="col s11 m5 l4 card small hoverable" style="margin: 30px" id="mystatistic">
        <div class="card-content">
            <span class="card-title center-align"><b>Статистика</b></span>

            <div class="row"> </div>


            <div class="row">
                <span class="col s6"><b>Выполняемые заказы:</b></span>
                <span class="col s6 right-align">8</span>
            </div>
            <div class="row">
                <span class="col s6"><b>Завершенных заказов:</b></span>
                <span class="col s6 right-align">14</span>
            </div>
            <div class="row">
                <span class="col s6"><b>Дата последнего заказа:</b></span>
                <span class="col s6 right-align">13.07.2017</span>
            </div>
        </div>
        <div class="card-action right-align"><a href="#">Мои заказы</a></div>
    </div>

	<div class="col s11 m5 l4 card small hoverable" style="margin: 30px">
            <div class="card-content">
                <span class="card-title center-align"><b>Оповещения о заказах</b></span>
                <div class="row"></div>
                <div class="row">

                    <div class="input-field col s8">
                        <i class="material-icons prefix">mail</i>
                        <input class="validate" type="text" id="mail">
                        <label for="mail">Mail</label>
                    </div>
                    <div class="col s4" style="padding-top: 30px">
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s8">
                        <i class="material-icons prefix">phone</i>
                        <input class="validate" type="text" id="phone">
                        <label for="phone">Phone</label>
                    </div>
                    <div class="col s4" style="padding-top: 30px">
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
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

<?php



if ($_GET['login']=="test" && $_GET['password']=="psdtest")
{
    header('Location:Profile/');
}
?>
</main>

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