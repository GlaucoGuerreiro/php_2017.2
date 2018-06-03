package exercicioextra01;

import java.util.ArrayList;
import java.util.Scanner;

public class Exercicio01_2 {
	public static void main(String[] args) {
		Integer cont = 0;
		Integer numero;
				
		ArrayList<Integer> sequencia = new ArrayList<>();
		
		Scanner teclado = new Scanner(System.in);
		
		for(int i=0; i<=sequencia.size(); i++) {
			System.out.print("Digite um número: ");
			
			numero = teclado.nextInt();
			
			if(numero == 0) {
				break;
			}else if((numero > 100) && (numero < 200) ) {
				cont += 1;
				sequencia.add(numero);
			}else {
				sequencia.add(numero);
			}
		}
		teclado.close();
		
		System.out.print(sequencia);
		System.out.print("\nForam digitados: "+ cont + " entre 100 e 200.");
		
		
		}
}