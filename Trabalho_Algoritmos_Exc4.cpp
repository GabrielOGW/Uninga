#include <stdio.h>

/*
Uma pessoa quer fazer uma pesquisa de opinião sobre uma peça de teatro.
Desenvolva um programa em C para anotar a idade, o sexo (M ou F) e a opinião dos espectadores (S-gostou da peça ou N-não gostou).
Quando não houver mais pessoas a serem entrevistadas,
o usuário deverá digitar zero para a idade e o programa deverá mostrar:
Quantas pessoas foram entrevistadas;
O percentual de pessoas que gostaram da peça;
Quantos homens e quantas mulheres participaram da pesquisa;
E a média de idade dos espectadores.
*/

main(){
    //Define as variaveis
    int idade, quantEspec = 0, contM = 0, contF = 0, gostou = 0, naoGostou = 0;
    char sexo, opniao;
    //Incompleto, dando erro, tentando arrumar
    do{
        printf("Qual a idade de espectador: ");
        scanf("%d",&idade);
        quantEspec++;
        printf("o sexo do espectador(M ou F): ");
        scanf("%c",&sexo);
        if(sexo = "M"){
            contM++;
        } else if(sexo = "F"){
            contF++;
        } else {
            printf("\nInserir um sexo valido\n");
        }
        printf("Você gostou ou não gostou do teatro\n(S para gostou ou N para não gostou)\n  ");
        scanf("%c",opniao);
        if(opniao = "S"){
            gostou++;
        } else if("N"){
            naoGostou++;
        } 
        printf("informe a idade de proximo espectador, ou 0 para encerrar a pesquisa: ");
        scanf("%d",idade);
    } while(idade != 0);
    printf("Mulheres: %d\n homens: %d\n gostou %d\n nao gostou %d\n ", contF, contM, gostou, naoGostou);
}
