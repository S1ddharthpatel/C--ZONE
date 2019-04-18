#include <stdio.h>
#include <stdlib.h>

int main()
{
   int num,i,no;
   FILE *fptr,fp;
   fptr = fopen("D:\program.txt","w");

   if(fptr == NULL)
   {
      printf("Error!");
      exit(1);
   }
   for(i=0;i<5;i++)
   {


   printf("Enter num: ");
   scanf("%d",&num);

   fprintf(fptr,"%d\n",num);
    }
fclose(fptr);

  fp = fopen("D:\program.txt", "r");
    printf("data in a file\n");
    for(i=0;i<5;i++)
    {
        fscanf(fp,"%d", no);
        printf("%d\t ", no);

    }
    fclose(fp);
   return 0;
}
