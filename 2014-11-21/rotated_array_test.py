import unittest

from rotated_array import RotatedArray, Util

class RotatedArrayTest(unittest.TestCase):

    def setUp(self):
        util = Util()
        rotated_once = util.rotate_left([1,2,3,4], 1)
        print rotated_once
        self.rotated_array = RotatedArray([1,2,3,4])

    def test_empty(self):
        #TODO
        expected = []
        result = self.rotated_array.count_rotations()
        self.assertEquals(expected, result)

if __name__ == '__main__':
    unittest.main()



