#include <stdio.h>

int main()
{
    //declaring necessary variables
   float num1, num2, res;
   int choice;

   //using loop to continuously ask user for operations
   while (choice){
      printf("\n-----------Menu--------------\n");
      printf("1. Addition\n");
      printf("2. Subtraction\n");
      printf("3. Multiplication\n");
      printf("4. Division\n");

   //getting user choices
      printf("Enter Your Choice:");
      scanf("%d", &choice);

   //getting first number
      printf("Enter first numbr: ");
      scanf("%f", &num1);

   //getting second number
      printf("Enter second numbr: ");
      scanf("%f", &num2);


   //based on choice performing selected operation
       switch(choice)
      {
         case 1:
            res = num1+num2;
            printf("\nAddition = %0.2f", res);
            break;
         case 2:
            res = num1-num2;
            printf("\nSubtraction = %0.2f", res);
            break;
         case 3:
            res = num1*num2;
            printf("\nMultipliction = %0.2f", res);
            break;
         case 4:
            res = num1/num2;
            printf("\nDivision = %0.2f", res);
            break;

         default:
            printf("\NInvalid choice !!!! ");

      }

   }


}


