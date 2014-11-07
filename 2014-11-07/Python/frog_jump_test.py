import unittest

from frog_jump import FrogJump

class FrogJumpTest(unittest.TestCase):
	
	def setUp(self):
		self.fg = FrogJump()

	def test10_85_30(self):
		expected = 3
		result = self.fg.min_jumps(10,85,30)
		self.assertEquals(expected,result)

	def test_10_101_30(self):
		expected = 4
		result = self.fg.min_jumps(10,101,30)
		self.assertEquals(expected,result)

	def test_0_1000000_10(self):
		expected = 100000
		result = self.fg.min_jumps(0, 1000000, 10)
		self.assertEquals(expected, result)

	def test_0_1000000000000_10(self):
		expected = 100000000000
		result = self.fg.min_jumps(0, 1000000000000, 10)
		self.assertEquals(expected, result)

if __name__ == '__main__':
	unittest.main()