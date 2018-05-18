package app;

import entidade.Cliente; /* comando usado para importar a classe Cliente do pacote Entidade.
						 import."nome do pacote"."nome da classe"*/

public class AppTest {
	public static void main(String[] args) {
		Cliente cliente; // referência do objeto.
		cliente = new Cliente(); // criação da instância do objeto.
		
		cliente.setId(1);
		cliente.setNome("Chico Cunha");
		cliente.setEmail("chicos2mirmizinho@gmail.com");
		
		System.out.println(cliente.getId());
		System.out.println(cliente.getNome());
		System.out.println(cliente.getEmail());
	}
}
