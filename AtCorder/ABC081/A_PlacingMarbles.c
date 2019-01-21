#include <stdio.h>
int main()
{
  char s[3];
  int count = 0, i = 0;
  scanf("%s", s);
  for (; i < 3; i++)
  {
    if (s[i] == '1')
    {
      count += 1;
    }
  }
  printf("%d\n", count);
  return 0;
}
