#!/usr/bin/env python

import unittest
from FizzBuzz import FizzBuzz

class FizzBuzzTest(unittest.TestCase):

    def testOne(self):
        fizzBuzz = FizzBuzz()
        result = fizzBuzz.run(1)
        self.assertEquals(1, result)

    def testTwo(self):
        fizzBuzz = FizzBuzz()
        result = fizzBuzz.run(2)
        self.assertEquals(2, result)

    def testThree(self):
        fizzBuzz = FizzBuzz()
        result = fizzBuzz.run(3)
        self.assertEquals("fizz", result)

    def testFive(self):
        fizzBuzz = FizzBuzz()
        result = fizzBuzz.run(5)
        self.assertEquals("buzz", result)

    def testSix(self):
        fizzBuzz = FizzBuzz()
        result = fizzBuzz.run(6)
        self.assertEquals("fizz", result)

    def testTen(self):
        fizzBuzz = FizzBuzz()
        result = fizzBuzz.run(10)
        self.assertEquals("buzz", result)

    def testFifteen(self):
        fizzBuzz = FizzBuzz()
        result = fizzBuzz.run(15)
        self.assertEquals("fizzbuzz", result)

    def testThirty(self):
        fizzBuzz = FizzBuzz()
        result = fizzBuzz.run(30)
        self.assertEquals("fizzbuzz", result)

if __name__ == '__main__':
    unittest.main()
