<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/************************************************************************************************************/

/************************************************************************************************************/
if($arParams["INC_JQUERY"] == "Y"){
    CJSCore::Init(array('jquery'));
}
if($arParams["DO_NOT_INC_OWL_CAROUSEL"] != "Y") {

    $APPLICATION->AddHeadScript($this->GetPath() . '/js/owl.carousel.min.js');
    $APPLICATION->SetAdditionalCSS($this->GetPath() . "/css/owl.carousel.css");
    $APPLICATION->SetAdditionalCSS($this->GetPath() . "/css/owl.theme.default.css");

}
if($arParams["DO_NOT_INC_MAGNIFIC_POPUP"] != "Y") {

    $APPLICATION->AddHeadScript($this->GetPath() . '/js/jquery.magnific-popup.js');
    $APPLICATION->SetAdditionalCSS($this->GetPath() . "/css/magnific-popup.css");
    
}

$arResult["MARGIN_SMALL_PICTURES"] = !empty($arParams["MARGIN_SMALL_PICTURES"]) ? $arParams["MARGIN_SMALL_PICTURES"] : 5;
$arResult["ITEM_WIDTH"] = !empty($arParams["ITEM_WIDTH"]) ? $arParams["ITEM_WIDTH"] : 150;

$arResult["ITEM_COUNT_BIG"] = !empty($arParams["ITEM_COUNT_BIG"]) ? $arParams["ITEM_COUNT_BIG"] : 1;
$arResult["ITEM_COUNT_SMALL"] = !empty($arParams["ITEM_COUNT_SMALL"]) ? $arParams["ITEM_COUNT_SMALL"] : 5;
$arResult["MARGIN_PICTURES_BIG"] = !empty($arParams["MARGIN_PICTURES_BIG"]) ? $arParams["MARGIN_PICTURES_BIG"] : 10;
$arResult["MARGIN_PICTURES_SMALL"] = !empty($arParams["MARGIN_PICTURES_SMALL"]) ? $arParams["MARGIN_PICTURES_SMALL"] : 10;
$arResult["AUTO_PLAY_BIG"] = $arParams["AUTO_PLAY_BIG"] == "Y" ? 1 : 0;
$arResult["AUTO_PLAY_TIMEOUT_BIG"] = !empty($arParams["AUTO_PLAY_TIMEOUT_BIG"]) ? $arParams["AUTO_PLAY_TIMEOUT_BIG"] : 3000;
$arResult["AUTO_PLAY_HOVER_PAUSE_BIG"] = $arParams["AUTO_PLAY_HOVER_PAUSE_BIG"] == "Y" ? 1 : 0;
$arResult["NAV_BIG"] = $arParams["NAV_BIG"] == "Y" ? 1 : 0;
$arResult["NAV_SMALL"] = $arParams["NAV_SMALL"] == "Y" ? 1 : 0;
$arResult["DOT_BIG"] = $arParams["DOT_BIG"] == "Y" ? 1 : 0;
$arResult["DOT_SMALL"] = $arParams["DOT_SMALL"] == "Y" ? 1 : 0;
$arResult["LAZY_LOAD_BIG"] = $arParams["LAZY_LOAD_BIG"] == "Y" ? 1 : 0;
$arResult["LAZY_LOAD_SMALL"] = $arParams["LAZY_LOAD_SMALL"] == "Y" ? 1 : 0;

$noPhoto = !empty($arParams["NO_PHOTO_PATH"]) ? $arParams["NO_PHOTO_PATH"] : "";

$imgArrayID = (array)$arParams["DATA_SOURCE"];

$widthBig = !empty($arParams["WIDTH"]) ? $arParams["WIDTH"] : 870;
$heightBig = !empty($arParams["HEIGHT"]) ? $arParams["HEIGHT"] : 870;
$widthSmall = $arResult["ITEM_WIDTH"];
$heightSmall = round($heightBig / $widthBig * $widthSmall);

$resizeBig = Array("width" => $widthBig, "height" => $heightBig);
$resizeSmall = Array("width" => $widthSmall, "height" => $heightSmall);

if (isset($imgArrayID) && !empty($imgArrayID)) {

    foreach ($imgArrayID as $k => $img) {

        $img = (int)$img;

        if ($img > 0) {

            $infoPicture = CFile::GetFileArray($img);
            $src[$k]["SOURCE_PICTURES"] = $infoPicture["SRC"];
            $src[$k]["NAME"] = GetMessage("PICTURE")." - " . ($k + 1);

            $resizedPicture = CFile::ResizeImageGet($img, $resizeBig, BX_RESIZE_IMAGE_EXACT, true);
            $src[$k]["SRC_BIG"] = $resizedPicture['src'];

            $arResult["ITEM_WIDTH"];

            $resizedPicture = CFile::ResizeImageGet($img, $resizeSmall, BX_RESIZE_IMAGE_EXACT, true);
            $src[$k]["SRC_SMALL"] = $resizedPicture['src'];

        }

    }

}

if (empty($src) && !empty($noPhoto)) {
    $src[] = Array("SOURCE_PICTURES" => $noPhoto, "SRC_BIG" => $noPhoto, "SRC_SMALL" => $noPhoto, "NAME" =>  GetMessage("PICTURE")." - 1");
}

$arResult["PICTURES"] = $src;

$this->IncludeComponentTemplate();
?>