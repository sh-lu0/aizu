#include <stdio.h>
int main(void)
{
  int a, b, c, x;
  scanf("%d%d%d%d", &a, &b, &c, &x);
  int r = solve(a, b, c, x);
  printf("%d\n", r);
  return 0;
}

int solve(a, b, c, x)
{
  int ans = 0;
  for (int i = 0; i <= a; ++i)
  {
    for (int j = 0; j <= b; ++j)
    {
      for (int k = 0; k <= c; ++k)
      {
        int tmp = (i * 500) + (j * 100) + (k * 50);
        if (tmp == x)
        {
          ans++;
        }
      }
    }
  }
  return ans;
}
