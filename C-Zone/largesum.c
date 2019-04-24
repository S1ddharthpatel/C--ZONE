/*

Author: Siddharth Patel
Program: Program to add two large numbers, larger than the size limit of int

*/
#include<stdio.h>

int main()
{
    int a[100],b[100],sum[100], i, j, n;

    printf("Enter the number of digit:");
    scanf("%d",&n);
    printf("\nEnter the number with spaces after each digit:");
    for(i=0;i<n;i++)
    {
        scanf("%d",&a[i]);
    }
    printf("\nEnter the number with spaces after each digit:");
    for(j=0;j<n;j++)
    {
        scanf("%d",&b[j]);
    }

    for(i=n-1;i>=0;i--)
    {
        sum[i]=a[i]+b[i];
        if(sum[i]>9)
        {
            sum[i]=sum[i]%10;
            a[i+1]=a[i]+1;
        }
    }

    printf("\nThe sum is ");
    for(i=0;i<n;i++)
    {
    printf("%d",sum[i]);
    }
    return 0;
}
