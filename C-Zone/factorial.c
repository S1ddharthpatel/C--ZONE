/*

Author: Siddharth Patel
Program: Finding factorial of a number using recursive functions

#include<stdio.h>

int fact(int n)//recursive function
{
    if(n==1)
    {return 1;}
    else
    {
        return n*fact(n-1);
    }
}

int main()
{
    int res, n;

    printf("Enter the digit: ");
    scanf("%d", &n);

    res=fact(n);

    printf("\n\nThe factorial of %d is %d\n\n",n, res);

    return 0;
}
