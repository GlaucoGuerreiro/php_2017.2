package exercicioextra01;

import java.util.Scanner;

public class Exercicio01 {
	public static void main(String[] args) {
		
		int ini;
		int fim;
		int soma = 0;
		
		Scanner teclado = new Scanner(System.in);
		
		System.out.print("Digite o in�cio de uma sequ�ncia de n�meros: ");
			
		ini = teclado.nextInt();
		
		
		System.out.print("Digite o t�rmino da sequ�ncia: ");
		
		fim = teclado.nextInt();
		
		teclado.close();
					
		for(int i = ini; i < fim; i++) {
			if(i == 0) {
				System.out.println("O valor 0 foi encontrado. Encerrado");
				break;
			}else{
				
				if(i>100 && i<200) {
					soma = soma + 1;					
				}
			}
			
			
		}
		System.out.print("A quantidade de n�meros entre 100 e 200 � de "+ soma + " n�meros");

	}
}
