<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? if (!empty($arResult["PICTURES"])): ?>

    <div id="slider" class="flexslider">
        <ul class="slides">
            <? foreach ($arResult["PICTURES"] as $k => $arItem): ?>
                <li>
                    <a href="<?= $arItem["SOURCE_PICTURES"] ?>" title="<?= $arItem["NAME"] ?>" rel="alternate">
                        <img src="<?= $arItem["SRC_BIG"] ?>" alt="<?= $arItem["NAME"] ?>"/>
                    </a>
                </li>
            <? endforeach; ?>
        </ul>
    </div>
    
    <div id="carousel" class="flexslider">
        <ul class="slides">
            <? foreach ($arResult["PICTURES"] as $arItem): ?>
                <li>
                    <img src="<?= $arItem["SRC_SMALL"] ?>" alt="<?= $arItem["NAME"] ?>"/>
                </li>
            <? endforeach; ?>
        </ul>
    </div>

    <script>
        initializationSlider(<?= $arResult["ITEM_WIDTH"] ?>, <?= $arResult["MARGIN_SMALL_PICTURES"] ?>, <?= $arResult["ANIMATION_LOOP"] ?>, <?= $arResult["AUTO_SLIDE"] ?>);
    </script>

<? endif; ?>