describe("Image Feed", function(){

    it("is a jQuery Plugin", function() {
      expect($('body').imageFeed).toBeDefined();
    });

    it("has it own scope, so can't be instantiated outside it", function() {
      expect(window.ImageFeed).not.toBeDefined();
    });

    it("lazyload a plugin instance on data-image-feed click", function() {
      var el = $('<a data-image-feed/>');

      el.click();

      expect(el instanceof $.imageFeed).toBe(true);

    });

    it("is not loaded without a click");

    it("loads only one plugin instance per data-image-feed");

    it("reads a remote feed from data-remote url");

    it("create img elements to show remote feed images");
})
