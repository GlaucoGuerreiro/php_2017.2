package leiturateclado;
	import java.util.Scanner;
	
public class LeituraDoTeclado {
	public static void main(String[] args) {
		
		String nome;
		String email;
		
		Scanner leitura = new Scanner(System.in);
		
		System.out.print("Digite um nome: ");
		nome = leitura.nextLine();
		
		System.out.print("Digite um e-mail: ");
		email = leitura.nextLine();
		
		System.out.println("O nome informado foi: "+nome+" \ne o e-mail informado foi: "+email);
		leitura.close();
	}
	
}
