#include <assert.h>
#include <string.h>
#include <stdlib.h>
#include <stdio.h>
char *convert(char *letter)
{
    char *result;
    result = malloc(10);
    int i, l;
    for (i = 0, l = strlen(letter); i < l; ++i) {
        if (letter[i] == "e")
            strcat(result, ".");
        if (letter[i] == "i")
            strcat(result, "..");
        if (istrcmp(*letter[i], "t") == 0)
            strcat(result, "-");
        //strcat(result, " ");
    }
    return result;
}

void test_should_return_ti_morse_code()
{
    char *expected = "- ..";
    char *result = convert("ti");

    assert(strcmp(expected, result) == 0);
}

void test_should_return_e_morse_code()
{
    char *expected = ".";
    char *result = convert("e");

    assert(strcmp(expected, result) == 0);
}

void test_should_return_i_morse_code()
{
    char *expected = "..";
    char *result = convert("i");

    assert(strcmp(expected, result) == 0);
}

void test_should_return_t_morse_code()
{
    char *expected = "-";
    char *result = convert("t");

    assert(strcmp(expected, result) == 0);
}

int main()
{
    test_should_return_e_morse_code();
    test_should_return_t_morse_code();
    test_should_return_i_morse_code();
    test_should_return_ti_morse_code();
    return 0;
}
