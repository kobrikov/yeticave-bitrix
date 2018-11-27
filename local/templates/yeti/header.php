<?if (!defined ("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?use Bitrix\Main\Page\Asset;?>
<?global $USER;?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead();?>
    <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/normalize.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
    ?>
    <title><?$APPLICATION->ShowTitle();?></title>
</head>
<body>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>

    <div class="page-wrapper">

        <header class="main-header">
            <div class="main-header__container container">
                <h1 class="visually-hidden">YetiCave</h1>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "local/templates/yeti/include/logotype.php"
                    )
                );?>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.title",
                    "",
                    Array(
                        "CATEGORY_0" => array(),
                        "CATEGORY_0_TITLE" => "",
                        "CHECK_DATES" => "N",
                        "CONTAINER_ID" => "title-search",
                        "INPUT_ID" => "title-search-input",
                        "NUM_CATEGORIES" => "1",
                        "ORDER" => "date",
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "SHOW_INPUT" => "Y",
                        "SHOW_OTHERS" => "N",
                        "TOP_COUNT" => "5",
                        "USE_LANGUAGE_GUESS" => "Y"
                    )
                );?>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "local/templates/yeti/include/add.php"
                    )
                );?>

                <nav class="user-menu">
                    <?if ($USER->IsAuthorized()):?>
                    <div class="user-menu__image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/user.jpg" width="40" height="40" alt="Пользователь">
                    </div>
                    <div class="user-menu__logged">
                        <p>Константин</p>
                        <a href="login.html">Выйти</a>
                    </div>
                    <?else:?>
                    <ul class="user-menu__list">
                        <li class="user-menu__item">
                            <a href="sign-up.php">Регистрация</a>
                        </li>
                        <li class="user-menu__item">
                            <a href="login.php">Вход</a>
                        </li>
                    </ul>
                    <?endif;?>
                </nav>
            </div>
        </header>

        <main class="container">