package persistencia;
	import entidade.Alunos;
	
	import java.sql.SQLException;
	import java.sql.PreparedStatement;
	import java.sql.Connection;
	
public class AlunosDAO extends DAO {
	
	private Connection conectar;
	
	public AlunosDAO() {
		
		try {
			conectar = conexao();
			
		} catch(SQLException e) {
			e.printStackTrace();
		}
	}

	public void salvar(Alunos a) throws SQLException {
		PreparedStatement stmt = null;
		
		try {
			stmt = conectar.prepareStatement("INSERT INTO alunos VALUES(null, ?, ?, ?)");
			
			stmt.setString(1, a.getNome());
			stmt.setString(2, a.getRg());
			stmt.setString(3, a.getTelefone());
			
			int flag = stmt.executeUpdate();
			
			if(flag == 0)
				throw new SQLException("Erro ao gravar no banco");
				
		} finally {
			if(conectar != null)
				conectar.close();
			
			if(stmt != null)
				stmt.close();
		}
	}
		
	public static void main(String[] args) {
		AlunosDAO dao = new AlunosDAO();
		
		Alunos aluno = new Alunos(0, null, null, null);
		
		aluno.setNome("Glauco Guerreiro");
		aluno.setRg("12356987-1");
		aluno.setTelefone("3119-7845");
		
		try {
			dao.salvar(aluno);
			System.out.print("Informações salvas com sucesso");
			
		} catch(SQLException e) {
			e.printStackTrace();
		}
	}
}
