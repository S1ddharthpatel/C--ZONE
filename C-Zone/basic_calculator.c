/*

Author: Siddharth Patel
Program: Basic Calculator with 4 basic operations(+,-,*,/)

*/
#include<stdio.h>

int main()
{
	float num1, num2, result;
	char start, operation;


	printf("\t\t\tBASIC CALCULATOR\n");
	printf("\t\t\t----------------\n\n");

	printf("To start the calculator enter 'o' : ");
	fflush(stdin);
	scanf("%c", &start);

	if (start==' ')
	{
		return 0;
	}
	else if (start='o'||start=='O')
	{
		system("cls");

		printf("\t\t\tBASIC CALCULATOR\n");
		printf("\t\t\t----------------\n\n");

		printf("Enter the value 1st Number : ");
		scanf("%f", &num1);
		printf("\n\nEnter the value 2nd Number : ");
		scanf("%f", &num2);
		printf("\n\nEnter operator \n + for addition \n - for subtraction \n * for multiplication \n / for division \n -> ");
	    fflush(stdin);
		scanf("%c", &operation);

		switch (operation)
		{
			case '+' : result=num1+num2;
			break;
			case '-' : result=num1-num2;
			break;
			case '*' : result=num1*num2;
			break;
			case '/' : result=num1/num2;
			break;
		}

		printf("\n\nThe result of %.2f %c %.2f is %.2f.", num1, operation, num2, result);

	}

	return 0;
}
