#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <assert.h>

char *to_morse_code(char *input)
{
    char *text;
    int length = (int)strlen(input);
    text = (char *)malloc((length * 5) * sizeof(char));

    int i;
    for (i = 0; i < length; i++) {
        switch(tolower(input[i])) {
            case 'a':
                strcat(text, ".-");
                break;
            case 'd':
                strcat(text, "-..");
                break;
            case 'f':
                strcat(text, "..-.");
                break;
            case 'i':
                strcat(text, "..");
                break;
            case 't':
                strcat(text, "-");
                break;
        }

        if ((length - i) != 1) {
            strcat(text, " ");
        }
    }

    return text;
}

void test_should_return_dafiti_in_morse_code()
{
    char *expected = "-.. .- ..-. .. - ..";
    char *result = to_morse_code("dafiti");
    assert(strcmp(expected, result) == 0);
    free(result);
}

void test_should_return_dafiti_in_morse_code_when_is_upper()
{
    char *expected = "-.. .- ..-. .. - ..";
    char *result = to_morse_code("DAFITI");
    assert(strcmp(expected, result) == 0);
    free(result);
}

void test_should_return_two_words_dafiti_in_morse_code()
{
    char *expected = "-.. .- ..-. .. - ..  -.. .- ..-. .. - ..";
    char *result = to_morse_code("dafiti dafiti");
    assert(strcmp(expected, result) == 0);
    free(result);
}


int main()
{
    test_should_return_dafiti_in_morse_code();
    test_should_return_dafiti_in_morse_code_when_is_upper();
    test_should_return_two_words_dafiti_in_morse_code();

    return 0;
}
