#include <stdio.h>
using namespace std;

main()
{
    float nota1, nota2, nota3, media;
    printf("\npasse a nota do primeiro trimestre: ");
    scanf("%f", &nota1);
    printf("\npasse a nota do segundo trimestre: ");
    scanf("%f", &nota2);
    printf("\npasse a nota do terceiro trimestre: ");
    scanf("%f", &nota3);

    media = (nota1 + nota2 + nota3) / (1 + 2 + 3);

    printf("\nA media ponderada anual é: %.1f\n", media);
}