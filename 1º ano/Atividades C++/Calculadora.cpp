#include <stdio.h>

main()
{
    float num1, num2, resultado;
    char operacao;
    printf("Informe um numero: ");
    scanf("%f", &num1);
    printf("Selecione uma operador (+, -, *, /): ");
    scanf("%s", &operacao);
    printf("Informe outro numero: ");
    scanf("%f", &num2);

    switch(operacao){
    case '+':
        resultado = num1 + num2;
        printf("\nA soma dos valores e = %.1f\n", resultado);
        break;
    case '-':
        resultado = num1 - num2;
        printf("\nA subtração dos valores e = %.1f\n", resultado);
        break;
    case '*':
        printf("\nA multiplicação dos valores e = %.1f\n", num1 * num2);
        break;
    case '/':
        if(operacao == '/' && num2 == 0){
            printf("nao e possivel realizar a divisao por zero\n");
            break;
        }
        printf("\nA divisão dos valores e = %.1f\n", num1 / num2);
        break;

    default:
        printf("\nOperador Invalido!\n");
        break;
    }
    return (0);
    
}