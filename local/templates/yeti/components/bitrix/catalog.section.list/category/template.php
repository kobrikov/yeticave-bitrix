<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<ul class="promo__list">
    <?foreach ($arResult['SECTIONS'] as &$arSection):?>
        <?
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
        ?>
        <li id="<?=$this->GetEditAreaId($arSection['ID']);?>" class="promo__item promo__item--<?=$arSection["CODE"];?>">
            <a class="promo__link" href="<?=$arSection['SECTION_PAGE_URL']?>"><?=$arSection["NAME"];?></a>
        </li>
    <?endforeach;?>
</ul>