import javax.swing.JOptionPane;

public class execLoja {
    public static void main(String[] args) {
        loja loja = new loja();

        loja.setValorMensal(Double.parseDouble(JOptionPane.showInputDialog(null, "Qual o valor de venda mensal da loja?"))); 
        loja.setCod((int)Double.parseDouble(JOptionPane.showInputDialog(null, "Selecione a região da loja:\n1 - Região Sul\n2 - Região Centro-Oeste\n3 - Região Sudeste"))); 
        
        loja.getLucro(loja.getCod(), loja.getValorMensal());
    }
}
