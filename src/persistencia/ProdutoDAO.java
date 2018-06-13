package persistencia;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import entidade.Produto;

// ProdutoDAO herdara os m�todos de DAO
public class ProdutoDAO extends DAO {

	private Connection conn;
	
	public ProdutoDAO() {
		// atribui a conex�o aberta ao atributo conn
		try {
			conn = abreConexao();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	
	public void salvar(Produto p) throws SQLException {
		PreparedStatement stmt = null;
		
		try {
			stmt = conn.prepareStatement("insert into produto values (null, ?, ?)");
			
			stmt.setString(1, p.getNome());
			stmt.setInt(2, p.getQuantidade());
			
			//stmt.execute();
			int flag = stmt.executeUpdate();
			/* stmt.executeUpdate() - dispara a instru��o para o banco e retorna um valor
			 * (0 ou 1), informando se executou com sucesso.
			 * Onde 1 � o retorno de sucesso e 0 � o retorno da falha.
			 */
			if(flag == 0) 
				throw new SQLException("Erro ao gravar no banco"); 
				
		} finally {
			/*
			 * (==) - igualdade
			 * (!=) - diferen�a
			 */
			if(conn != null)
				conn.close();
			if(stmt != null)
				stmt.close();
		}
	}
	
	public static void main(String[] args) {
		ProdutoDAO dao = new ProdutoDAO();
		
		Produto produto = new Produto();
		produto.setNome("iPhone 7");
		produto.setQuantidade(10);
		
		try {
			dao.salvar(produto);
			System.out.println("Produto salvo com sucesso!");
		} catch (SQLException e) {
			e.printStackTrace();
		}
		
	}
}
