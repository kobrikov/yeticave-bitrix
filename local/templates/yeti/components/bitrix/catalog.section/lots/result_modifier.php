<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
foreach ($arResult['ITEMS'] as $key => $arElement)
{
    $res = CIBlockSection::GetByID($arElement["IBLOCK_SECTION_ID"]);
    $arResult["ITEMS"][$key]["CATEGORY"] = $res->GetNext();
}
?>
