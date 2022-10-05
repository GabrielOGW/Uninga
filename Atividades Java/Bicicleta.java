public class Bicicleta {
    String guidao;
    String cambio;
    String roda;

    public static void trocaMarcha(){
        System.out.println("Trocando de marcha.");
    }

    public static void pedalar(){
        System.out.println("pedalando.");
    }
    public static void main(String[] args) {
        trocaMarcha();
        pedalar();
    }
}