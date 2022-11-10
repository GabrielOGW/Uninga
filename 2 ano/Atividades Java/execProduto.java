import javax.swing.JOptionPane;

public class execProduto {
    public static void main(String[] args) {
        produto prod = new produto();

        prod.setPrecoAtual(Double.parseDouble(JOptionPane.showInputDialog("Qual o preço atual do produto?")));
        prod.setVendaMensal(Double.parseDouble(JOptionPane.showInputDialog("Qual o valor de venda media mensal?")));

        JOptionPane.showMessageDialog(null, "O novo valor do produto será: R$" + prod.getNovoPreco(prod.getPrecoAtual(), prod.getVendaMensal()));

    }
}
