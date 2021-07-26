#include <stdio.h>

/*
Em um campeonato de futebol existem cinco times e cada time possui 11 jogadores.
Faça um programa em C que receba a idade, o peso e a altura de cada um dos jogadores, calcule e mostre:
A quantidade de jogadores com idade inferior a 18 anos;
A média das idades dos jogadores de cada time;
A média das alturas de todos os jogadores do campeonato;
A porcentagem de jogadores com mais de 80 quilos entre todos os jogadores do campeonato.
*/

main(){
    //variaveis:
    int idade, i, j, menores = 0, somaIdade = 0, qtde80 = 0;
    float peso, altura, mediaIdade, somaAltura = 0, mediaAltura, porcentagemPeso;
    //laço de repetição para coletar as informações dos times
    for(j = 1; j < 6; j++){
        printf("\ntime %d", j);
        for(i = 1;i<11;i++){
            printf("\nDigite a idade do jogador %d: ",i);
            scanf("%i",&idade);
            printf("\nDigite o peso do jogador %d: ",i);
            scanf("%f",&peso);
            printf("\nDigite a altura do jogador %d: ",i);
            scanf("%f",&altura);
            if(idade < 18){
                menores++;
            }
            if(peso > 80){
                qtde80++;
            }
            somaIdade = somaIdade + idade;
            somaAltura = somaAltura + altura;
        }
    //após passar as informações do primeiro time mostra a media de idade
    mediaIdade = somaIdade/11;
    printf("\nA idade media dos jogadores desse time é: %.f", mediaIdade);
    //Passa a Variavel somaIdade para 0 para poder coletar apenas a idade do proximo time
    somaIdade=0;
    }
    //faz a media da altura e a porcentagem de jogadores acima de 80 kgs
    mediaAltura = somaAltura/55;
    porcentagemPeso = qtde80*100/55;
    //apresenta a media de  altura dos jogadores, porcentagem de jogadores com mais de 80kg e jogadores menores de idade
    printf("\nA altura media dos jogadores é: %.2f", mediaAltura);
    printf("\nA porcentagem de jogadores acima de 80 kgs: %.2f", porcentagemPeso);
    printf("\nA quantidade de jogadores menores de 18 anos é: %d\n", menores);
}
