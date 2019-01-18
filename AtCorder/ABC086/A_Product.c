#include <stdio.h>
int main()
{
  int a, b, result;
  char s[101];
  scanf("%d %d", &a, &b);
  result = a * b;
  if (result % 2 == 0)
  {
    printf("Even\n");
  }
  else
  {
    printf("Odd\n");
  }
  return 0;
}
