
package salario;
import java.util.Scanner;
public class Salario {

    public static void main(String[] args) {
        int salario=0;
        int dias_trabajados=0;
        int salario_promedio=0;
        Scanner teclado=new Scanner(System.in);
        System.out.print("Senor usuario popr favor dijite su salrio actual: ");
        salario=teclado.nextInt();
        System.out.print("Senor usuario digite los dias que  ha trabajado: ");
        dias_trabajados=teclado.nextInt();
        salario_promedio=salario/dias_trabajados;
        System.out.println("El salario promedio para usted es :"+salario_promedio);
        
        
              
    }
    
}
