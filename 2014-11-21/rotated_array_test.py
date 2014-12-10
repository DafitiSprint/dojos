import unittest

from rotated_array import RotatedArray

class RotatedArrayTest(unittest.TestCase):

    def test_should_return_2(self):
        expected = 2
        self.rotated_array = RotatedArray([3,4,1,2])
        result = self.rotated_array.count_rotations()
        self.assertEquals(expected, result)

    def test_should_return_3(self):
        expected = 3
        self.rotated_array = RotatedArray([2,3,4,1])
        #result = self.rotated_array.count_rotations()
        result = self.rotated_array.n_shifted_bs(self.rotated_array.rotated_array)
        self.assertEquals(expected, result)

    # def test_should_return_10000000_bs(self):
    #     expected = 9995000
    #     arr = range(5000, 10000000)
    #     rotated = arr + range(5000)
    #     self.rotated_array = RotatedArray(rotated)
    #     result = self.rotated_array.n_shifted_bs(self.rotated_array.rotated_array)
    #     self.assertEquals(expected, result)

    def test_should_return_10000000_n(self):
        expected = 9995000
        arr = range(5000, 10000000)
        rotated = arr + range(5000)
        self.rotated_array = RotatedArray(rotated)
        result = self.rotated_array.count_rotations()
        self.assertEquals(expected, result)

if __name__ == '__main__':
    unittest.main()



