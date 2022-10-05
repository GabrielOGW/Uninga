import javax.swing.JOptionPane;

public class ExecCarro {
    public static void main(String[] args) {
        double imposto, lucro, preco;
        imposto = 0.492;
        preco = 50000.0;
        lucro = 0.2;

        carro2 car = new carro2();

        car.setImposto(imposto);
        car.setLucro(lucro);
        car.setPreco(preco);

        double valorImp, lucroFinal, valorFinal;

        valorImp = car.calcImp(imposto, preco);
        lucroFinal = car.calcLucro(preco, valorImp, lucro);
        valorFinal = car.valorFinal(preco, valorImp, lucroFinal);

        JOptionPane.showMessageDialog(null, valorFinal);
    }
}