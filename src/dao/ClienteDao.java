package dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import model.Cliente;

public class ClienteDao {
	private Connection conectar = null;
	
	public ClienteDao() {
		conectar = new Conexao().pegar();
	}
	
	@SuppressWarnings("resource")
	public void adicionaDados(Cliente cliente) throws SQLException {
		PreparedStatement stmt = null;
		
		try {
			stmt = conectar.prepareStatement("insert into cliente(nomecliente) values(?)", java.sql.Statement.RETURN_GENERATED_KEYS);
			
			stmt.setString(1, cliente.getNome());
			
			stmt.executeUpdate();
			
			try(ResultSet rsKeys = stmt.getGeneratedKeys()){
				if(rsKeys.next()) {
					cliente.setIdCliente(rsKeys.getInt(1));
				
					stmt = conectar.prepareStatement("insert into contato(telefone, idcliente) values (?,?)");
					stmt.setString(1, cliente.getContato().getTelefone());
					stmt.setInt(2, cliente.getIdCliente());
				
					stmt.executeUpdate();
					
					stmt = conectar.prepareStatement("insert into endereco(logradouro, idcliente) values(?,?)");
					stmt.setString(1, cliente.getEndereco().getLogradouro());
					stmt.setInt(2, cliente.getIdCliente());
				
					stmt.executeUpdate();
				}
			}
			
		} finally {
			if(stmt != null)
				stmt.close();
			if(conectar != null)
				conectar.close();
		}
	}
	
	
}
