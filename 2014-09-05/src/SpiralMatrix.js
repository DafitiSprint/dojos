var SpiralMatrix = function(columns, lines) {
  this.columns = columns;
  this.lines = lines;
  this.matrix = new Array();
  this.count = lines*columns;
};

SpiralMatrix.prototype.getMatrix = function() {
	var actualNumber = 0;
	for (var line = 0; line < this.lines; line++) {
		this.matrix[line] = new Array();
		
		for (var column = 0; column < this.columns; column++) {
			this.matrix[line][column] = ++actualNumber;
		};
	}
	return this.matrix;
}