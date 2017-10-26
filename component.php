<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/************************************************************************************************************/

/************************************************************************************************************/
if($arParams["DONT_CONNECT_FLEX"] != "Y") {

    $APPLICATION->AddHeadScript($this->GetPath() . '/js/jquery.flexslider.js');
    $APPLICATION->SetAdditionalCSS($this->GetPath() . "/css/flexslider.css");

}
if($arParams["DONT_CONNECT_NAGNIFIC"] != "Y") {

    $APPLICATION->AddHeadScript($this->GetPath() . '/js/jquery.magnific-popup.js');
    $APPLICATION->SetAdditionalCSS($this->GetPath() . "/css/magnific-popup.css");
    
}

$arResult["MARGIN_SMALL_PICTURES"] = !empty($arParams["MARGIN_SMALL_PICTURES"]) ? $arParams["MARGIN_SMALL_PICTURES"] : 5;
$arResult["ITEM_WIDTH"] = !empty($arParams["ITEM_WIDTH"]) ? $arParams["ITEM_WIDTH"] : 150;

$arResult["AUTO_SLIDE"] = $arParams["AUTO_SLIDE"] == "Y" ? 1 : 0;

$arResult["ANIMATION_LOOP"] = $arParams["ANIMATION_LOOP"] == "Y" ? 1 : 0;

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
            $src[$k]["NAME"] = "Изображение - " . ($k + 1);

            $resizedPicture = CFile::ResizeImageGet($img, $resizeBig, BX_RESIZE_IMAGE_EXACT, true);
            $src[$k]["SRC_BIG"] = $resizedPicture['src'];

            $arResult["ITEM_WIDTH"];

            $resizedPicture = CFile::ResizeImageGet($img, $resizeSmall, BX_RESIZE_IMAGE_EXACT, true);
            $src[$k]["SRC_SMALL"] = $resizedPicture['src'];

        }

    }

}

if (empty($src) && !empty($noPhoto)) {
    $src[] = Array("SOURCE_PICTURES" => $noPhoto, "SRC_BIG" => $noPhoto, "SRC_SMALL" => $noPhoto, "NAME" => "Изображение - 1");
}

$arResult["PICTURES"] = $src;

$this->IncludeComponentTemplate();
?>