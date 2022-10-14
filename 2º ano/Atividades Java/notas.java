public class notas {
    private double nota1, nota2, nota3;
    
    public void setNota1(double nota1) {
        this.nota1 = nota1;
    }
    public void setNota2(double nota2) {
        this.nota2 = nota2;
    }
    public void setNota3(double nota3) {
        this.nota3 = nota3;
    }
    public double getNota1() {
        return nota1;
    }
    public double getNota2() {
        return nota2;
    }
    public double getNota3() {
        return nota3;
    }

    public double getMedia(double nota1, double nota2, double nota3) {
        double media = 0.0;
        media = ((nota1 + nota2 + nota3) / 3);
        return media;
    }
    public double getMaior(double nota1, double nota2, double nota3) {
        double maior = 0.0;
        if(nota1 > maior) {
            maior = nota1;
        } if (nota2 > maior) {
            maior = nota2;
        } if (nota3 > maior) {
            maior = nota3;
        }
        return maior;
    }
    public double getMenor(double nota1, double nota2, double nota3){
        double menor = 100.0;
        if(nota1 < menor) {
            menor = nota1;
        } if (nota2 < menor) {
            menor = nota2;
        } if (nota3 < menor) {
            menor = nota3;
        }
        return menor;
    }
    public double getDuasMaiores(double nota1, double nota2, double nota3){    
        double media;
        double maior = 0.0, menor = 100.0, mediana= 0;

        if(nota1 > maior) {
            maior = nota1;
        } if (nota2 > maior) {
            maior = nota2;
        } if (nota3 > maior) {
            maior = nota3;
        }
        if(nota1 < menor) {
            menor = nota1;
        } if (nota2 < menor) {
            menor = nota2;
        } if (nota3 < menor) {
            menor = nota3;
        }

        if(nota1 < maior && nota1 > menor) {
            mediana = nota1;    
        } if (nota2 < maior && nota2 > menor) {
            mediana = nota2;
        } if (nota3 < maior && nota3 > menor) {
            mediana = nota3;
        }
        media = ((mediana + maior) / 2);
        return media;
    }
}