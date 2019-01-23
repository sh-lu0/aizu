#include <stdio.h>
int main()
{
  int n, x, cnt = 1 << 29;
  for (scanf("%d", &n); n--;)
  {
    int r = 0;
    scanf("%d", &x);
    for (; x % 2 < 1; x /= 2)
      r++;
    if (cnt > r)
    {
      cnt = r;
    }
  }
  printf("%d\n", cnt);
  return 0;
}
