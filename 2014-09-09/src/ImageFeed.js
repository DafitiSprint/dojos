(function(){
    var ImageFeed = function(){

    }


    $.fn.imageFeed = function(){
        return $(this).data('imgfeed', new ImageFeed());
    }

    $(document).on('click', '[data-image-feed]', function(e) {
        $(this).imageFeed();
    })
})();