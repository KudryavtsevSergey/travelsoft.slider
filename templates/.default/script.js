var initializationSlider = function (ItemWidth, ItemMargin, AnimationLoop, AutoSlide) {
    $(window).load(function () {
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: ItemWidth,
            itemMargin: ItemMargin,
            asNavFor: '#slider'
        })
        ;

        $('#slider').flexslider({
            animation: "slide",
            animationLoop: AnimationLoop,
            slideshow: AutoSlide,
            sync: "#carousel",
            controlNav: "thumbnails"
        })
        ;

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
}