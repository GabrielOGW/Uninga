public class produto {
    //declaração de variaveis
    private double precoAtual, vendaMensal;
    
    //altera/acessa o valor da variavel.
    public double getPrecoAtual() {
        return precoAtual;
    }
    public void setPrecoAtual(double precoAtual) {
        this.precoAtual = precoAtual;
    }
    public double getVendaMensal() {
        return vendaMensal;
    }
    public void setVendaMensal(double vendaMensal) {
        this.vendaMensal = vendaMensal;
    }

    public double getNovoPreco(double precoAtual, double vendaMensal){
        double novoPreco = 0;
            if(vendaMensal < 500.0 && precoAtual < 30.0){
                novoPreco = precoAtual * 1.10;
            } else if(vendaMensal >= 500.0 && vendaMensal < 1200.0 && precoAtual >= 30.0 && precoAtual < 80.0){
                novoPreco = precoAtual * 1.15;
            } else if(vendaMensal >= 1200.0 && precoAtual >= 80.0){
                novoPreco = precoAtual * 0.80;
            } else {
                novoPreco = precoAtual;
            }
        return novoPreco;
    }
}
