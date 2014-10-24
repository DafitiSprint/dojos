class Seq5:
    # def extractDiagonals(self, matrix):
    #   backward_diagonal = [matrix[i][i] for i in range(len(matrix))]
      
    def findGreatestSequence(self, matrix=[]):
        return max(self.findGreatestCrossSequence(matrix), self.findGreatestDiagonalSequence(matrix))

    def findGreatestDiagonalSequence(self,matrix=[]):
        productory = 1
        productoryInverse = 1
        for positionX in range(len(matrix)):
            productory *= matrix[positionX][positionX]
            productoryInverse *= matrix[len(matrix) - positionX - 1][positionX]

        return max(productoryInverse, productory)

    def findGreatestHorizontalSequence(self, matrix=[]):
        productory = 1
        greatestSequence = 0
        for positionX in range(len(matrix)):
            for positionY in range(len(matrix)):
                productory *= matrix[positionX][positionY]
            if productory > greatestSequence:
                greatestSequence = productory

            productory = 1

        return greatestSequence

    def findGreatestCrossSequence(self, matrix=[]):        
        productoryHorizontal = 1
        productoryVertical = 1
        for positionX in range(len(matrix)):
            for positionY in range(len(matrix)):
                productoryHorizontal *= matrix[positionX][positionY]
                productoryVertical *= matrix[positionY][positionX]
            productoryHorizontal, productoryVertical = 1, 1

        return max(productoryHorizontal, productoryVertical)            

    def findGreatestVerticalSequence(self, matrix=[]):
        productory = 1
        greatestSequence = 0
        for positionY in range(len(matrix)):
            for positionX in range(len(matrix)):
                productory *= matrix[positionX][positionY]
            if productory > greatestSequence:
                greatestSequence = productory

            productory = 1

        return greatestSequence