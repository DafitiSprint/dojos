import unittest

from perm_missing_elem import PermMissingElem

class PermMissingElemTest(unittest.TestCase):
	
	def setUp(self):
		self.missing_elem = PermMissingElem()

	def missing_4_in_5(self):
  		arr = [2, 3, 1, 5]
  		expected = 4
  		result = self.missing_elem.find(arr)
  		self.assertEquals(expected, result)

if __name__ == '__main__':
	unittest.main()