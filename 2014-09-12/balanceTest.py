import unittest
from balance import Balance

class BalanceTest (unittest.TestCase):
	
	def testSingleArray(self):
		balance = Balance([3])
		self.assertEquals([0], balance.point())

	def testSingleArray2n(self):
		balance = Balance([3])
		self.assertEquals([0], balance.point2n())

	def testArrayOf2(self):
		balance = Balance([3,5])
		self.assertEquals([-1], balance.point())

	def testShouldReturnBalancePoint(self):
		balance = Balance([-7, 1, 5, 2, -4, 3, 0])
		self.assertEquals([3,6], balance.point())

	# def testArrayOf22n(self):
	# 	balance = Balance([3,5,3])
	# 	self.assertEquals([1], balance.point2n())	


if __name__ == '__main__':
	unittest.main()