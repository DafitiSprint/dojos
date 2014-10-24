describe("A SpiralMatrix suite", function() {
	it("should build a matrix 1x1 for 1 column and 1 line", function(){
		var spiralMatrix = new SpiralMatrix(1, 1);
		expect([[1]]).toEqual(spiralMatrix.getMatrix());
	}); 

	it("should build a matrix 2x1 for 2 columns and 1 line", function(){
		var spiralMatrix = new SpiralMatrix(2, 1);
		expect([[1,2]]).toEqual(spiralMatrix.getMatrix());
	}); 

	it("should build a matrix 1x2 for 1 column and 2 lines", function(){
		var spiralMatrix = new SpiralMatrix(1, 2);
		expect([[1],[2]]).toEqual(spiralMatrix.getMatrix());
	}); 

	it("should build a matrix 2x2 for 2 columns and 2 lines", function(){
		var spiralMatrix = new SpiralMatrix(2, 2);
		expect([[1,2],[4,3]]).toEqual(spiralMatrix.getMatrix());
	}); 


});
