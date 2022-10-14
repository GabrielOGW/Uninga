public class atd1{
    //declaração de função
    static int x = 50, y = 25;
    public static void soma(){
        int z = x+y;
        System.out.println(z);;
    }
    public static void subtração(){
        int z = x-y;
        System.out.println(z);
    }
    public static void multiplicacao(){
        int z = x*y;
        System.out.println(z);
    }
    public static void divisao(){
        int z = x/y;
        System.out.println(z);
    }
    
    public static void main(String args[]){
        soma();
        subtração();
        multiplicacao();
        divisao();
    }
}