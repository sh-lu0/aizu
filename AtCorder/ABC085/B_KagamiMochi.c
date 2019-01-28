#include <stdio.h>
#include <stdlib.h>
int desc(const void *a, const void *b)
{
  return *(int *)b - *(int *)a;
}

int main(void)
{
  int n, i, r = 1, before;
  int arr[999];
  scanf("%d", &n);
  for (i = 0; i < n; i++)
    scanf("%d", arr + i);
  printf(arr + i);
  qsort(arr, n, 4, desc);
  before = arr[0];
  for (i = 1; i < n; i++)
  {
    if (before != arr[i])
    {
      before = arr[i];
      r++;
    }
  }
  printf("%d\n", r);
  return 0;
}
