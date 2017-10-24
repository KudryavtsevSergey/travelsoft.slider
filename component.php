<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$APPLICATION->AddHeadScript($this->GetPath() . '/js/jquery.flexslider.js');
$APPLICATION->AddHeadScript($this->GetPath() . '/js/jquery.magnific-popup.js');
$APPLICATION->SetAdditionalCSS($this->GetPath() . "/css/magnific-popup.css");
$APPLICATION->SetAdditionalCSS($this->GetPath() . "/css/flexslider.css");

/************************************************************************************************************/

/************************************************************************************************************/
$arResult["MARGIN_SMALL_PICTURES"] = !empty($arParams["MARGIN_SMALL_PICTURES"]) ? $arParams["MARGIN_SMALL_PICTURES"] : 5;
$arResult["ITEM_WIDTH"] = !empty($arParams["ITEM_WIDTH"]) ? $arParams["ITEM_WIDTH"] : 150;

$arResult["AUTO_SLIDE"] = $arParams["AUTO_SLIDE"] == "Y" ? 1 : 0;

$arResult["ANIMATION_LOOP"] = $arParams["ANIMATION_LOOP"] == "Y" ? 1 : 0;

$NO_PHOTO_DEFAULT = $componentPath . "/images/NO_PHOTO_DEFAULT.jpg";

$noPhoto = !empty($arParams["NO_PHOTO_PATH"]) ? $arParams["NO_PHOTO_PATH"] : $NO_PHOTO_DEFAULT;

$imgArrayID = (array)$arParams["DATA_SOURCE"];

$resize = Array("width" => $arParams["WIDTH"], "height" => $arParams["HEIGHT"]);

if (isset($imgArrayID) && !empty($imgArrayID)) {

    foreach ($imgArrayID as $k => $img) {

        $img = (int)$img;

        if ($img > 0) {

            $infoPicture = CFile::GetFileArray($img);
            $src[$k]["SOURCE_PICTURES"] = $infoPicture["SRC"];
            $src[$k]["NAME"] = "Изображение - " . ($k + 1);

            $resizedPicture = CFile::ResizeImageGet($img, $resize, BX_RESIZE_IMAGE_EXACT, true);
            $src[$k]["SRC_PICTURES"] = $resizedPicture['src'];

        }

    }

}

if (empty($src)) {
    $src[] = Array("SRC_PICTURES" => $noPhoto, "SOURCE_PICTURES" => $noPhoto, "NAME" => "Изображение - 1");
}

$arResult["PICTURES"] = $src;

$this->IncludeComponentTemplate();
?>