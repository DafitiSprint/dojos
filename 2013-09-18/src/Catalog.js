var catalog = {

    onError: function(a, width) {
        a.attr("src", "img_placeholder.jpg");
        a.onerror = null;
        a.attr("width", width || 160);
        a.addClass("error-img");
        a.parents(".lazyImage").addClass("loaded");

        return !0;
    },

};
