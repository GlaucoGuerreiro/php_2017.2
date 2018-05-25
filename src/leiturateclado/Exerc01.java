package leiturateclado;
	import java.util.Scanner;
	
public class Exerc01 {
	public static void main(String[] args) {
		
		String nome;
		String telefone;
		int idade;
		double altura;
		String sexo;
		
		Scanner scan = new Scanner(System.in);
		
		System.out.print("Informe o nome: ");
		nome = scan.nextLine();
		
		System.out.print("Informe o telefone: ");
		telefone = scan.nextLine();
		
		System.out.print("Informe a idade: ");
		idade = scan.nextInt();
		
		System.out.print("Informe a altura: ");
		altura = scan.nextDouble();
		
		System.out.print("Informe o sexo: ");
		sexo = scan.next();
		
		scan.close();
		
		System.out.print("Os dados informados foram:\n"
				+"nome: "+nome+"\nTelefone: "+telefone+"\nIdade: "+idade);
		System.out.printf("\nAltura: %.2f", altura);
		System.out.print("\nSexo: "+sexo);
	}
	
	
}
