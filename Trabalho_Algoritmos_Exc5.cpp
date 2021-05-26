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
    int menores = 0, jogador, times = 5, i = 0, j = 0;
    int idade, mediaIdade, pesoAcima, totalIdade;
    float peso, altura, mediaAltura, porcentagemPeso, totalAltura;
/*
    Apresentando erros pois não gera o resultado esperado, buscar como arruma-lo e alterar
    for(jogador = 1; jogador < 12; jogador++){
        for(i = 1; i < 6; i++){
            printf("Time %d\nJogador %d\nDigite a idade do jogador: ", i, jogador);
            scanf("%d",&idade);
            totalIdade = totalIdade + idade;
            printf("Informe a altura: ");
            scanf("%f",&altura);
            totalAltura = totalAltura + altura;
            printf("Informe o peso: ");
            scanf("%f",&peso);
            if(idade < 18){
                menores++;
            }
            if(peso > 80.0){
                pesoAcima++;
            }
        mediaAltura = totalAltura / jogadores;
        porcentagemPeso = 100* pesoAcima / jogadores;
        } // precisa terminar ainda falta coisa, está dando erro ao rodar
    mediaIdade = totalIdade / 11;
    }
    printf("\nA idade media dos jogadores é: %.d", mediaIdade);
    printf("\nA altura media dos jogadores é: %.2f", mediaAltura);
    printf("\nA porcentagem de jogadores acima de 80 kgs: %.2f", porcentagemPeso);
    printf("\nA quantidade de jogadores menores de 18 anos é: %d\n", menores);*/
}
