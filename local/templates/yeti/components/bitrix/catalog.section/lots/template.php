<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<ul class="lots__list">
    <?foreach ($arResult['ITEMS'] as &$arElement):?>
        <?
        $uniqueId = $arElement["ID"] . '_' . md5($this->randString() . $component->getAction());
        $areaId = $this->GetEditAreaId($uniqueId);
        $this->AddEditAction($uniqueId, $arElement["EDIT_LINK"], $elementEdit);
        $this->AddDeleteAction($uniqueId, $arElement["DELETE_LINK"], $elementDelete, $elementDeleteParams);
        ?>
        <li id="<?=$areaId?>" class="lots__item lot">
            <div class="lot__image">
                <img src="<?=$arElement["DETAIL_PICTURE"]["SRC"]?>" width="350" height="260" alt="<?=$arElement["DETAIL_PICTURE"]["ALT"]?>">
            </div>
            <div class="lot__info">
                <span class="lot__category"><?=$arElement['CATEGORY']['NAME']?></span>
                <h3 class="lot__title"><a class="text-link" href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a></h3>
                <div class="lot__state">
                    <div class="lot__rate">
                        <span class="lot__amount">Стартовая цена</span>
                        <span class="lot__cost"><?=$arElement["PRICES"]["BASE"]["VALUE"]?><b class="rub">р</b></span>
                    </div>
                    <div class="lot__timer timer">
                        16:54:12
                    </div>
                </div>
            </div>
        </li>
    <?endforeach;?>
</ul>
