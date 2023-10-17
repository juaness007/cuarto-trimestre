
package numeromayor;


public class NumeroMayor {

    public static void main(String[] args) {
    int numero1=10;
    int numero2=10;
    
    if (numero1>=numero2){
        if(numero1==numero2){
            System.out.println("Los numeros "+numero1+" y "+numero2+" son iguales");
        }else{
            System.out.println("El numero "+numero1+"es mayor que el numero"+numero2);
        }
       }else{
        System.out.println("El numero "+numero2+"es mayor que el numero "+numero1);
        }
    }
}
