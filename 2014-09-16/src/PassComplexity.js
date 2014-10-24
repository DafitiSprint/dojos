(function ( $ ) {
	var PassComplexity = function(method) {
		$(this).data("passComplexity","");	
		this.hasNumber = function(){
			return false;
		}
		this.hasNumber();
	};

	$.fn.passComplexity = PassComplexity;

}( jQuery ));