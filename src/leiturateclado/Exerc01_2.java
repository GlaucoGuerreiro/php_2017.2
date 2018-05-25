package leiturateclado;
	import java.util.Scanner;
	
public class Exerc01_2 {
	public static void main(String[] args) {
		
		String nome;
		String telefone;
		int idade;
		double altura;
		String sexo;
		
		try(Scanner scan = new Scanner(System.in)){;
		
		System.out.print("Informe o nome: ");
		nome = scan.nextLine();
		
		System.out.print("Informe o telefone: ");
		telefone = scan.nextLine();
		
		System.out.print("Informe a idade: ");
		idade = Integer.parseInt(scan.nextLine());
		//poderia ser: idade = new Integer(scan.nextLine());
		
		System.out.print("Informe a altura: ");
		altura = Double.parseDouble(scan.nextLine());
		// poderia ser: altura = new Double(scan.nextLine());
		
		System.out.print("Informe o sexo(M|F): ");
		sexo = scan.next();
		
		}
					
		System.out.print("Os dados informados foram:\n"
				+"nome: "+nome+"\nTelefone: "+telefone+"\nIdade: "+idade);
		System.out.printf("\nAltura: %.2f", altura);
		System.out.print("\nSexo: "+sexo);
		
	}
	
	
}
