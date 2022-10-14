public class paciente {
    private double altura, peso;

    public void setAltura(double altura) {
        this.altura = altura;
    }
    public double getAltura() {
        return altura;
    }
    public void setPeso(double peso) {
        this.peso = peso;
    }
    public double getPeso() {
        return peso;
    }

    public String getConceito(double altura, double peso){
        String conceito = null;
        if (altura < 1.20 && peso < 60) {
            conceito = "A";
        } else if(altura >= 1.20 && altura <= 1.70 && peso < 60) {
            conceito = "B";
        } else if(altura >1.70 && peso < 60) {
            conceito = "C";
        } else if(altura < 1.20 && peso >= 60 && peso < 90) {
            conceito = "D";
        } else if(altura >= 1.20 && altura <= 1.70 && peso >= 60 && peso < 90) {
            conceito = "E";
        } else if(altura > 1.70 && peso >= 60 && peso < 90) {
            conceito = "F";
        } else if(altura <= 1.20 && peso >= 90) {
            conceito = "G";
        } else if(altura >= 1.20 && altura <= 1.70 && peso > 90) {
            conceito = "H";
        } else if(altura > 1.70  && peso > 90) {
            conceito = "I";
        }
        return conceito;
    }
}
