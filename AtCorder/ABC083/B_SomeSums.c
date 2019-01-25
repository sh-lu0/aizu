#include <stdio.h>
int main(void)
{
  int n, a, b, c;
  scanf("%d%d%d%d", &n, &a, &b, &c);
  int r = 0;

  for (int i = 1; i <= n; ++i)
  {
    int sum = 0, j = i;
    for (; j; j /= 10)
    {
      sum += j % 10;
    }
    if (a <= sum && sum <= b)
      r += i;
  }

  printf("%d\n", r);
  return 0;
}
