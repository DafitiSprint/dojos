#include <assert.h>

char *something()
{
    return "dojo";
}

void test_should_return_dojo()
{
    char *expected = "dojo";
    char *result = something();
    assert(strcmp(expected, result) == 0);
}

void test_should_fail()
{
    assert(1 == 2);
}

int main()
{
    test_should_return_dojo();
    test_should_fail();
    return 0;
}
