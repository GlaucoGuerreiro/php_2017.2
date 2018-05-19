package conexao;

import java.sql.Connection; //Métodos para conexão
import java.sql.DriverManager; //Métodos para instalar e carregar o driver do BD.
import java.sql.SQLException; //Métodos para tratamento dos erros.



public class Conectar {
	
	public void ConnectiongetConnection() throws ClassNotFoundException {
	
	try {
		
		Class.forName("com.mysql.jdbc.Driver"); //Carrega um driver em tempo de execuçao.
		
		//carregar o driver do MySQL e passar informações para conexão
		
		DriverManager.getConnection("jdbc:mysql:localhost/lojacd","root","");
		
	}
	
	catch (SQLException excecao) {
		
		throw new RuntimeException(excecao);
	}

}
}