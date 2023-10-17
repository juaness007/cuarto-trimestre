
package suma;
import java.util.Scanner;

public class Suma {

    public static void main(String[] args) {
        int numero1=0;
        int numero2=0;
        int suma=0;
        
        Scanner teclado=new Scanner(System.in);
        
        System.out.println("SEÑOR USUARIO DIGITE EL PRIMER NUMERO");
        numero1=teclado.nextInt();
        System.out.println("usted digito el numero: "+numero1);
        System.out.println("SEÑOR USUARIO DIGITE EL SEGUNDO NUMERO");
        numero2=teclado.nextInt();
        System.out.println("usted digito el numero: "+numero1);
        suma=numero1+numero2; 
        System.out.println("El resultado de la suma es: "+suma);
    }
    
}
