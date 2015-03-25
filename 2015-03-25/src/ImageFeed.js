(function() {

  var ImageFeed = function() {

  }

  $.fn.imageFeed = function(){
    this.data('dft-image-feed', new ImageFeed());
    return this;
  }


})();
