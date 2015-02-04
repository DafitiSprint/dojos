import unittest

from collatz import Collatz

class CollatzTest (unittest.TestCase):
    
    def setUp(self):
        self.c = Collatz()
    
    def test_one(self):
        expected = [1]
        result = self.c.chain(1)
        self.assertEquals(expected,result)

    def test_two(self):
        expected = [2,1]
        result = self.c.chain(2)
        self.assertEquals(expected,result)
    
    def test_13(self):
        expected = [13, 40, 20, 10, 5, 16, 8 ,4, 2, 1]
        result = self.c.chain(13)
        self.assertEquals(expected, result) 

    def test_len_chain(self):
        expected = 10
        result = self.c.len_chain(13)
        self.assertEquals(expected, result)

    def test_find_greatest_chain(self):
        expected = 2
        result = self.c.find_greatest_chain(1,2)
        self.assertEquals(expected, result)
    
    def test_find_greatest_chain100(self): # ~38s
        expected = 525
        result = self.c.find_greatest_chain(1,1000000)
        self.assertEquals(expected, result)
if __name__ == '__main__':
    unittest.main()
