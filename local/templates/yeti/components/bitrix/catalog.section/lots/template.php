<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<ul class="lots__list">
    <?foreach ($arResult['ITEMS'] as &$arElement):?>
        <?
        $res = CIBlockSection::GetByID($arElement["IBLOCK_SECTION_ID"]);
        if($ar_res = $res->GetNext());
        ?>
        <?
        $productID = $arElement["ID"];
        $arBasePrice = CPrice::GetBasePrice($productID);
        ?>
        <li class="lots__item lot">
            <div class="lot__image">
                <img src="<?=$arElement["DETAIL_PICTURE"]["SRC"]?>" width="350" height="260" alt="Сноуборд">
            </div>
            <div class="lot__info">
                <span class="lot__category"><?=$ar_res['NAME']?></span>
                <h3 class="lot__title"><a class="text-link" href="lot.html"><?=$arElement["NAME"]?></a></h3>
                <div class="lot__state">
                    <div class="lot__rate">
                        <span class="lot__amount">Стартовая цена</span>
                        <span class="lot__cost"><?=$arBasePrice["PRICE"]?><b class="rub">р</b></span>
                    </div>
                    <div class="lot__timer timer">
                        16:54:12
                    </div>
                </div>
            </div>
        </li>
    <?endforeach;?>
</ul>
