describe('PassComplexity', function() {
	it('should be a Jquery plugin', function() {
		expect($.fn.passComplexity).toBeDefined();
	});

	it("has it own scope, so can't be instantiated outside it", function(){
		expect(window.passComplexity).not.toBeDefined();
	});

	it("can be loaded on a DOM element", function(){
		var el = $('<input/>');
		el.passComplexity();
		expect(el.data('passComplexity')).toBeDefined();
	});

	it("should return true when password have numbers", function(){
		var el = $('<input value="asd"/>');
		expect(el.passComplexity('hasNumber')).toBe(false);
	});
});