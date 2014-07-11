<?php

require 'String.php';

class StringTest extends PHPUnit_Framework_TestCase
{
    public function testStrtoupperWhenAllIsLowerCaseShouldReturnAllUpper()
    {
        $expected = "DAFITI";
        $actual = String::strtoupper("dafiti");
        $this->assertEquals($expected, $actual);
    }

    public function testStrtoupperWhenAllIsUpperCaseShouldReturnAllUpper()
    {
        $expected = "DAFITI";
        $actual = String::strtoupper("DAFITI");
        $this->assertEquals($expected, $actual);
    }

    public function testStrtolowerWhenAllIsUpperCaseShouldReturnAllLower()
    {
        $expected = "dafiti";
        $actual = String::strtolower("DAFITI");
        $this->assertEquals($expected, $actual);
    }

    public function testStrtolowerWhenAllIsLowerCaseShouldReturnAllLower()
    {
        $expected = "dafiti";
        $actual = String::strtolower("dafiti");
        $this->assertEquals($expected, $actual);
    }

    public function testUcfirstWhenThereIsUpperAndLowerCaseShouldReturnFirstUpper()
    {
        $expected = "Dafiti";
        $actual = String::ucfirst("dAfItI");
        $this->assertEquals($expected, $actual);
    }

    public function testUcfirstWhenFirstIsUpperCaseShouldReturnFirstUpper()
    {
        $expected = "Dafiti";
        $actual = String::ucfirst("DAfItI");
        $this->assertEquals($expected, $actual);
    }

    public function testUcwordsWhenThereIsUpperAndLowerCaseShouldReturnFirstUpperEachWord()
    {
        $expected = "Dafiti Premium";
        $actual = String::ucwords("dAfItI pReMiUm");
        $this->assertEquals($expected, $actual);
    }

    public function testUcwordsWhenEachFirstLetterIsUpperCaseShouldReturnFirstUpperEachWord()
    {
        $expected = "Dafiti Premium";
        $actual = String::ucwords("DAfItI PreMiUm");
        $this->assertEquals($expected, $actual);
    }

    public function testSubstrWhenStartIsPositiveAndLengthIsOmittedShouldReturn4Letters()
    {
        $expected = "cdef";
        $actual = String::substr("abcdef", 2);
        $this->assertEquals($expected, $actual);
    }

    public function testSubstrWhenStartIsNegativeAndLengthIsOmittedShouldReturn2Letters()
    {
        $expected = "ef";
        $actual = String::substr("abcdef", -2);
        $this->assertEquals($expected, $actual);
    }

    public function testSubstrWhenStartIsNegativeAndLengthIsPositiveShouldReturn1Letter()
    {
        $expected = "d";
        $actual = String::substr("abcdef", -3, 1);
        $this->assertEquals($expected, $actual);
    }

    public function testSubstrWhenStartIsZeroAndLengthIsPositiveShouldReturn4Letters()
    {
        $expected = "abcd";
        $actual = String::substr("abcdef", 0, 4);
        $this->assertEquals($expected, $actual);
    }

    public function testSubstrWhenStartIsZeroAndLengthIsNegativeShouldReturn5Letters()
    {
        $expected = "abcde";
        $actual = String::substr("abcdef", 0, -1);
        $this->assertEquals($expected, $actual);
    }

    public function testSubstrWhenStartIsPositiveAndLengthIsPositiveShouldReturn3Letters()
    {
        $expected = "bcd";
        $actual = String::substr("abcdef", 1, 3);
        $this->assertEquals($expected, $actual);
    }

    public function testSubstrWhenStartIsPositiveAndLengthIsNegativeShouldReturn3Letters()
    {
        $expected = "cde";
        $actual = String::substr("abcdef", 2, -1);
        $this->assertEquals($expected, $actual);
    }

    public function testSubstrWhenStartIsNegativeAndLengthIsNegativeShouldReturn2Letters()
    {
        $expected = "de";
        $actual = String::substr("abcdef", -3, -1);
        $this->assertEquals($expected, $actual);
    }

    public function testSubstrWhenLengthIsZeroOrFalseOrNullShouldReturnAnEmptyString()
    {
        $expected = "";
        $actual1 = String::substr("abcdef", 1, 0);
        $actual2 = String::substr("abcdef", 1, false);
        $actual3 = String::substr("abcdef", 1, null);
        $this->assertEquals($expected, $actual1);
        $this->assertEquals($expected, $actual2);
        $this->assertEquals($expected, $actual3);
    }

    public function testSubstrWhenStartIsBeyondOfStringSizeShouldReturnFalse()
    {
        $actual = String::substr("a", 1);
        $this->assertFalse($actual);
    }

    public function testSubstrWhenStartIsBeyondOfStringSizeAndLengthIsNegativeShouldReturnFalse()
    {
        $actual = String::substr("abcdef", 4, -4);
        $this->assertFalse($actual);
    }
}
