<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="nav">
    <ul class="nav__list container">
        <?foreach ($arResult as $arItem):?>
            <li class="nav__item">
                <a href="<?=$arItem['LINK']?>"><?=$arItem["TEXT"];?></a>
            </li>
        <?endforeach;?>
    </ul>
</nav>
