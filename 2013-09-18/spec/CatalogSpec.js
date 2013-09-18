describe('Catalog', function() {

    it("catalog onError test", function(){
        var a = $('a');

        var b = {
            'addClass': function() {}
        };

        a = jasmine.createSpyObj(a, ['attr','addClass', 'parents']);
        a.parents.andReturn(b);
        spyOn(b,['addClass']);

        expect(catalog.onError(a)).toEqual(true);
        expect(a.attr).toHaveBeenCalledWith("src","img_placeholder.jpg");
        expect(a.attr).toHaveBeenCalledWith("width",160);
        expect(a.addClass).toHaveBeenCalledWith("error-img");
        expect(a.parents).toHaveBeenCalledWith(".lazyImage");        
        expect(b.addClass).toHaveBeenCalledWith("loaded");
    });

    it("catalog onError test", function(){
        var a = $('a');

        var b = {
            'addClass': function() {}
        };

        a = jasmine.createSpyObj(a, ['attr','addClass', 'parents']);
        a.parents.andReturn(b);
        spyOn(b,['addClass']);

        expect(catalog.onError(a)).toEqual(true);
        expect(a.attr).toHaveBeenCalledWith("src","img_placeholder.jpg");
        expect(a.attr).toHaveBeenCalledWith("width",160);
        expect(a.addClass).toHaveBeenCalledWith("error-img");
        expect(a.parents).toHaveBeenCalledWith(".lazyImage");        
        expect(b.addClass).toHaveBeenCalledWith("loaded");
    });


});
