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

<div id="slider" class="flexslider">
    <ul class="slides">
        <? foreach ($arResult["PICTURES"] as $k => $arItem): ?>
            <li>
                <a href="<?= $arItem["SOURCE_PICTURES"] ?>" title="<?= $arItem["NAME"] ?>" rel="alternate">
                    <img src="<?= $arItem["SRC_PICTURES"] ?>" alt="<?= $arItem["NAME"] ?>"/>
                </a>
            </li>
        <? endforeach; ?>
    </ul>
</div>
<div id="carousel" class="flexslider">
    <ul class="slides">
        <? foreach ($arResult["PICTURES"] as $arItem): ?>
            <li>
                <img src="<?= $arItem["SRC_PICTURES"] ?>" alt="<?= $arItem["NAME"] ?>"/>
            </li>
        <? endforeach; ?>
    </ul>
</div>

<script>
    $(window).load(function () {
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: <?=$arResult["ITEM_WIDTH"]?>,
            itemMargin: <?=$arResult["MARGIN_SMALL_PICTURES"]?>,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            animationLoop: <?=$arResult["ANIMATION_LOOP"]?>,
            slideshow: <?=$arResult["AUTO_SLIDE"]?>,
            sync: "#carousel",
            controlNav: "thumbnails"
        });

        $('.slides').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            }
        });
    });
</script>
