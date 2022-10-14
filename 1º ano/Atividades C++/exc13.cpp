#include <stdio.h>
#include <math.h>
using namespace std;

main(){
    float X1, X2, Y1, Y2, distancia;
    printf("\npasse os X1 e x2 do plano cartesiano: ");
    scanf("%f %f",&X1, &X2);
    printf("\npasse os Y1 e Y2 do plano cartesiano: ");
    scanf("%f %f",&Y1, &X2);

    distancia = sqrt( pow(X1-X1, 2) + pow(Y2 - Y1, 2));

    printf("\nA distancia entre X e Y é: %.1f\n", distancia);
}