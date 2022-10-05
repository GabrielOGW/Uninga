import java.util.Scanner;

public class carro {
    String fabricante, modelo, cor;
    int ano;
    double preco;

    static double financiar(Float numParcelas, double preco, float juros){
        double valorParcela;
        double CF;
        CF = juros / (1 - Math.pow((1 + juros), - numParcelas));
        valorParcela = preco * CF;
        System.out.println("O valor das parcelas: "+ String.format("R$%.2f", valorParcela));
        return 0;
    }
    public static void main(String[] args) {
        try (Scanner ler = new Scanner(System.in)) {
            carro car = new carro();
            System.out.println("Qual a fabricante do carro? ");
            car.fabricante = ler.nextLine();
            System.out.println("Qual modelo do carro? ");
            car.modelo = ler.nextLine();
            System.out.println("Qual cor do carro? ");
            car.cor = ler.nextLine();
            System.out.println("Qual ano do carro? ");
            car.ano = ler.nextInt();
            System.out.println("Qual valor do carro? ");
            car.preco = ler.nextDouble();
            System.out.println("Qual a quantidade de parcelas? ");
            float numParcelas = ler.nextFloat();
            System.out.println("Qual o valor do juros em porcentagem: ");
            float juros = ler.nextFloat();
            System.out.println(financiar(numParcelas, car.preco, juros));
        }
    }
}