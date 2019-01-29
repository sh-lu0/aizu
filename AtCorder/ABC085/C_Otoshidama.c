#include <stdio.h>
#include <stdlib.h>

int main(void)
{
  int n, t, i, j, k;
  scanf("%d %d", &n, &t);
  for (i = 0; i <= n; i++)
  {
    for (j = 0; j <= n - i; j++)
    {
      k = n - i - j;
      if (1000 * i + 5000 * j + 10000 * k == t)
      {
        printf("%d %d %d\n", k, j, i);
        return 0;
      }
    }
  }
  puts("-1 -1 -1");
  return 0;
}
