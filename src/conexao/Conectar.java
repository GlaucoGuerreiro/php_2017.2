package conexao;

import java.sql.Connection; //M�todos para conex�o
import java.sql.DriverManager; //M�todos para instalar e carregar o driver do BD.
import java.sql.SQLException; //M�todos para tratamento dos erros.



public class Conectar {
	
	public void ConnectiongetConnection() throws ClassNotFoundException {
	
	try {
		
		Class.forName("com.mysql.jdbc.Driver"); //Carrega um driver em tempo de execu�ao.
		
		//carregar o driver do MySQL e passar informa��es para conex�o
		
		DriverManager.getConnection("jdbc:mysql:localhost/lojacd","root","");
		
	}
	
	catch (SQLException excecao) {
		
		throw new RuntimeException(excecao);
	}

}
}