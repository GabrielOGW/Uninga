public class testaBicibleta {

    public static void main(String[] args) {
        Bicicleta bicicleta;
        bicicleta = new Bicicleta();
        bicicleta.guidao = "Guidão extenso";
        bicicleta.cambio = "Cambio manual";
        Bicicleta.trocaMarcha();
        Bicicleta.pedalar();
        System.out.println("Numero da conta: " + bicicleta.guidao);
        System.out.println("Agencia: " + bicicleta.cambio);
        System.out.println("Saldo: " + bicicleta.roda);
    }
}