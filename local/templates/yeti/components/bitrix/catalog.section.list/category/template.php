<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?//echo "<pre> arResult: "; print_r($arResult); echo "</pre>"?>


<ul class="promo__list">
    <?foreach ($arResult['SECTIONS'] as &$arSection):?>
        <li class="promo__item promo__item--<?=$arSection["CODE"];?>">
            <a class="promo__link" href="all-lots.html"><?=$arSection["NAME"];?></a>
        </li>
    <?endforeach;?>
</ul>