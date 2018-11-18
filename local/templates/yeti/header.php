<?if (!defined ("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead();?>
    <link href="<?=SITE_TEMPLATE_PATH?>/css/normalize.min.css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" rel="stylesheet">
    <title><?$APPLICATION->ShowTitle();?></title>
</head>
<body>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>

    <div class="page-wrapper">

        <header class="main-header">
            <div class="main-header__container container">
                <h1 class="visually-hidden">YetiCave</h1>
                <a class="main-header__logo">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" width="160" height="39" alt="Логотип компании YetiCave">
                </a>
                <form class="main-header__search" method="get" action="https://echo.htmlacademy.ru">
                    <input type="search" name="search" placeholder="Поиск лота">
                    <input class="main-header__search-btn" type="submit" name="find" value="Найти">
                </form>
                <a class="main-header__add-lot button" href="add-lot.html">Добавить лот</a>
                <nav class="user-menu">
                    <div class="user-menu__image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/user.jpg" width="40" height="40" alt="Пользователь">
                    </div>
                    <div class="user-menu__logged">
                        <p>Константин</p>
                        <a href="login.html">Выйти</a>
                    </div>
                </nav>
            </div>
        </header>

        <main class="container">