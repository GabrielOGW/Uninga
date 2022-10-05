public class carro2 {
    private double imposto, lucro, preco;

    public double getImposto() {
        return imposto;
    }

    public void setImposto(double imposto) {
        this.imposto = imposto;
    }

    public double getLucro() {
        return lucro;
    }

    public void setLucro(double lucro) {
        this.lucro = lucro;
    }
    
    public double getPreco() {
        return preco;
    }
    public void setPreco(double preco) {
        this.preco = preco;
    }

    double calcImp(double imposto, double preco){
        return (preco * imposto);
    }

    double calcLucro(double preco, double valorImp, double lucro){
        return((preco + valorImp) * lucro);
    }

    double valorFinal(double preco, double valorImp, double lucroFinal){
        return (preco + valorImp + lucroFinal);
    }
}