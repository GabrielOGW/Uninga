public class aluno2 {
    // NotaTL: trabalho laboratorio
    private double notaTL, avaliacao, exameFinal;

    // altera, ou acessa as notas
    public void setAvaliacao(double avaliacao) {
        this.avaliacao = avaliacao;
    }
    public double getAvaliacao() {
        return avaliacao;
    }
    
    public void setExameFinal(double exameFinal) {
    }
    public double getExameFinal() {
        return exameFinal;
    }

    public void setNotaTL(double notaTL) {
        this.notaTL = notaTL;
    }
    public double getNotaTL() {
        return notaTL;
    }

    public double setMedia(double notaTL, double avaliacao, double exameFinal){
        double media = ((notaTL * 2) + (avaliacao * 3) + (exameFinal * 5));
        media = media / 10;
        return media;
    }

    public String getConceito(double media){
        String conceito = null;
        if(media > 8){
            conceito = "A";
        } else if(media > 7){
            conceito = "B";
        } else if(media > 6){
            conceito = "C";
        } else if(media > 5){
            conceito = "D";
        } else {
            conceito = "E";
        }
        return conceito; 
    }
}
