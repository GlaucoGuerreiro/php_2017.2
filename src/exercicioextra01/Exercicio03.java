package exercicioextra01;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;

public class Exercicio03 {
	public static void main(String[] args) {
		
		Integer soma = 0;
		Double media;
		Integer numero;
		
		ArrayList<Integer> numeros = new ArrayList<>();
		
		Scanner teclado = new Scanner(System.in);
						
		for(int i=0; i<=numeros.size(); i++) {
			System.out.print("Informe os n�meros desejado: ");
			
			numero = teclado.nextInt();
					
			if(numero == 0) {
				System.out.print("O finalizador foi digitado. ");
			}else {
			numeros.add(numero);
			
			}
				soma += numero;
			}
		
		teclado.close();
		media = (double) soma / numeros.size();
		
		System.out.print("\nOs n�meros digitados foram: " + numeros);
		
		Collections.sort(numeros);
				
		System.out.print("\nOs n�meros digitados ordenados s�o: " + numeros);
		System.out.print("\nA soma dos n�meros �: " + soma);
		System.out.printf("\nA m�dia obtida �: %.2f", media);
	}
}
