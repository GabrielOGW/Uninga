import javax.swing.JOptionPane;

public class fatorial {
    private long num1;

    public long getNum1() {
        return num1;
    }
    public void setNum1(long num1) {
        this.num1 = num1;
    }

    public long getFatoracao(long num1){
        long fatoracao = 1;
        for (long i = 1; i < (num1+1); i++) {
            fatoracao *= i;
            JOptionPane.showMessageDialog(null,"Resultado da " + i + "ª fatoração: " + fatoracao);
        }

        return 0;
    }
}
