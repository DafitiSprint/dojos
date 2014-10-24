import unittest

from seq5 import Seq5

class Seq5Test (unittest.TestCase):
	def testFirstMatrix(self):
		m = [[2,1,1,1,1],[1,2,1,1,1],[1,1,2,1,1],[1,1,1,2,1],[1,1,1,1,2]]
		seq5 = Seq5()
		self.assertEquals(32, seq5.findGreatestSequence(m))

	def testUnitaryMatrix(self):
		m = [[1,1,1,1,1],[1,1,1,1,1],[1,1,1,1,1],[1,1,1,1,1],[1,1,1,1,1]]
		seq5 = Seq5()	
		self.assertEquals(1, seq5.findGreatestSequence(m))

	def testHorizontalMatrix(self):
		m = [[2,2,2,2,2],[1,1,1,1,1],[1,1,1,1,1],[1,1,1,1,1],[1,1,1,1,1]]
		seq5 = Seq5()
		self.assertEquals(32, seq5.findGreatestSequence(m))

	def testVerticalMatrix(self):
		m = [[2,1,1,1,1],[2,1,1,1,1],[2,1,1,1,1],[2,1,1,1,1],[2,1,1,1,1]]
		seq5 = Seq5()
		self.assertEquals(32, seq5.findGreatestSequence(m))

	def testInvertedDiagonal(self):
		m = [[2,1,1,1,3],[2,1,1,3,1],[2,1,2,1,1],[2,3,1,1,1],[1,1,1,1,1]]
		seq5 = Seq5()
		self.assertEquals(54, seq5.findGreatestSequence(m))
		
if __name__ == '__main__':
	unittest.main()