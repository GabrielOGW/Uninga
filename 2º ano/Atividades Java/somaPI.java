import javax.swing.JOptionPane;

public class somaPI {
    private int num;

    public void setNum(int num) {
        this.num = num;
    }
    public int getNum() {
        return num;
    }

    public int getSoma(int num) {
        int pares = 0;
        int impares = 0;
        for (int i = 0; i <= num; i++) {
            if(i % 2 == 0){
                pares = pares + i;
            } else {
                impares = impares + i;
            }
        }
        JOptionPane.showMessageDialog(null, "A soma dos numeros pares: " + pares);
        JOptionPane.showMessageDialog(null, "A soma dos numeros impares: " + impares);
        return 0;
    }
}
