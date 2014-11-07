import unittest

from perm_missing_elem import PermMissingElem

class PermMissingElemTest(unittest.TestCase):
	
	def setUp(self):
		self.missing_elem = PermMissingElem()

	def test_missing_4_in_5(self):
  		arr = [2, 3, 1, 5]
  		expected = 4
  		result = self.missing_elem.find(arr)
  		self.assertEquals(expected, result)

  	def test_missing_1_in_5(self):
  		arr = [2, 3, 4, 5]
  		expected = 1
  		result = self.missing_elem.find(arr)
  		self.assertEquals(expected, result)

  	def test_missing_1_in_100(self):
  		arr = range(1, 100)
  		arr.pop(0)
  		expected = 1
  		result = self.missing_elem.find(arr)
  		self.assertEquals(expected, result)

  	def test_missing_99_in_100(self):
  		arr = range(1, 101)
  		arr.pop(98)
  		expected = 99
  		result = self.missing_elem.find(arr)
  		self.assertEquals(expected, result)

  	# def test_missing_99_in_100000000(self):
  	# 	arr = range(1, 100000001)
  	# 	arr.pop(99999998)
  	# 	expected = 999999989
  	# 	result = self.missing_elem.find(arr)
  	# 	self.assertEquals(expected, result)

if __name__ == '__main__':
	unittest.main()