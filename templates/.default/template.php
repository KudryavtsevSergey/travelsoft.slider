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

    <div class="owl-carousel owl-theme" id="big">
        <? foreach ($arResult["PICTURES"] as $k => $arItem): ?>
            <a href="<?= $arItem["SOURCE_PICTURES"] ?>" title="<?= $arItem["NAME"] ?>" rel="alternate">
                <img class="owl-lazy" data-src="<?= $arItem["SRC_BIG"]; ?>" alt="<?= $arItem["NAME"] ?>">
            </a>
        <? endforeach; ?>
    </div>

    <div class="owl-carousel owl-theme" id="small">
        <? foreach ($arResult["PICTURES"] as $k => $arItem): ?>
            <img class="owl-lazy" data-number="<?= $k ?>" data-src="<?= $arItem["SRC_SMALL"]; ?>"
                 alt="<?= $arItem["NAME"] ?>">
        <? endforeach; ?>
    </div>

    <script>
        (function ($) {

            $(document).ready(function () {
                DetailSlide(
                    <?= $arResult["ITEM_COUNT_BIG"] ?>,
                    <?= $arResult["ITEM_COUNT_SMALL"] ?>,
                    <?= $arResult["MARGIN_PICTURES_BIG"] ?>,
                    <?= $arResult["MARGIN_PICTURES_SMALL"] ?>,
                    <?= $arResult["AUTO_PLAY_BIG"] ?>,
                    <?= $arResult["AUTO_PLAY_TIMEOUT_BIG"] ?>,
                    <?= $arResult["AUTO_PLAY_HOVER_PAUSE_BIG"] ?>,
                    <?= $arResult["NAV_BIG"] ?>,
                    <?= $arResult["NAV_SMALL"] ?>,
                    <?= $arResult["DOT_BIG"] ?>,
                    <?= $arResult["DOT_SMALL"] ?>,
                    <?= $arResult["LAZY_LOAD_BIG"] ?>,
                    <?= $arResult["LAZY_LOAD_SMALL"] ?>
                );

                function DetailSlide(
                    itemsCountBig,
                    itemsCountSmall,
                    marginPicturesBig,
                    marginPicturesSmall,
                    autoPlayBig,
                    autoPlayTimeoutBig,
                    autoPlayHoverPause,
                    navBig,
                    navSmall,
                    dotBig,
                    dotSmall,
                    lazyLoadBig,
                    lazyLoadSmall
                ) {
                    var slideBig = $("#big");
                    var slideSmall = $("#small");

                    var slidesPerPage = itemsCountSmall; //globaly define number of elements per page
                    var syncedSecondary = true;

                    slideBig.owlCarousel({
                        items: itemsCountBig,
                        lazyLoad: lazyLoadBig,
                        loop: false,                                //по кругу
                        margin: marginPicturesBig,                  //отступ
                        mouseDrag: true,                            //листать мышкой
                        touchDrag: true,                            //на планшете
                        nav: navBig,                                //навигация
                        navText: ["<a class='next-prev prev'></a>", "<a class='next-prev next'></a>"],
                        dots: dotBig,                               //dots in bottom
                        autoplay: autoPlayBig,                      //авто пролистывание
                        autoplayTimeout: autoPlayTimeoutBig,        //Интервалы между пролистыванием элементов
                        autoplayHoverPause: autoPlayHoverPause      //Останавливает автопроигрывание если навести мышкой (hover) на элемент
                    }).on('changed.owl.carousel', syncPosition);

                    slideSmall.on('initialized.owl.carousel', function () {
                        slideSmall.find(".owl-item").eq(0).addClass("current");
                    }).owlCarousel({
                        items: slidesPerPage,
                        lazyLoad: lazyLoadSmall,
                        loop: false,
                        margin: marginPicturesSmall,
                        mouseDrag: true,
                        touchDrag: true,
                        nav: navSmall,
                        navText: ["<a class='next-prev prev'></a>", "<a class='next-prev next'></a>"],
                        dots: dotSmall,
                        itemsCustom: [[320, 3], [480, 5], [768, 6], [992, 7], [1200, 8]],
                    }).on('changed.owl.carousel', syncPosition2);

                    function syncPosition(el) {
                        var current = el.item.index;

                        slideSmall.find(".owl-item").removeClass("current").eq(current).addClass("current");
                        var onscreen = slideSmall.find('.owl-item.active').length - 1;
                        var start = slideSmall.find('.owl-item.active').first().index();
                        var end = slideSmall.find('.owl-item.active').last().index();

                        if (current > end) {
                            slideSmall.data('owl.carousel').to(current, 100, true);
                        }
                        if (current < start) {
                            slideSmall.data('owl.carousel').to(current - onscreen, 100, true);
                        }
                    }

                    function syncPosition2(el) {
                        if (syncedSecondary) {
                            var number = el.item.index;
                            slideBig.data('owl.carousel').to(number, 100, true);
                        }
                    }

                    slideSmall.on("click", ".owl-item", function (e) {
                        e.preventDefault();
                        var number = $(this).index();
                        slideBig.data('owl.carousel').to(number, 300, true);
                    });

                    $('.owl-stage').magnificPopup({
                        delegate: 'a',
                        type: 'image',
                        gallery: {
                            enabled: true,
                            navigateByImgClick: true,
                            preload: [0, 1]
                        }
                    });
                }
            });
        })(jQuery);
    </script>
<? endif; ?>