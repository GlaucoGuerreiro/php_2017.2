package persistencia;

import entidade.Aluno;

import java.sql.SQLException;
import java.sql.PreparedStatement;
import java.sql.Connection;

public class AlunoDAO extends DAO {

	private Connection conectar;

	public AlunoDAO() {

		try {
			conectar = conexao();

		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

	public void salvar(Aluno a) throws SQLException {
		PreparedStatement stmt = null;

		try {
			stmt = conectar.prepareStatement("INSERT INTO alunos VALUES(null, ?, ?, ?)");

			stmt.setString(1, a.getNome());
			stmt.setString(2, a.getRg());
			stmt.setString(3, a.getTelefone());

			int flag = stmt.executeUpdate();

			if (flag == 0)
				throw new SQLException("Erro ao gravar no banco");

		} finally {
			if (conectar != null)
				conectar.close();

			if (stmt != null)
				stmt.close();
		}
	}

	public void excluir(Long matricula) throws SQLException {
		PreparedStatement stmt = null;

		try {
			stmt = conectar.prepareStatement("delete from alunos where matricula = ?");

			stmt.setLong(1, matricula);

			int flag = stmt.executeUpdate();

			if (flag == 0)
				throw new SQLException("Houve um erro ao excluir o registro do banco");

		} finally {
			if (conectar != null)
				conectar.close();
			if (stmt != null)
				stmt.close();
		}
	}

	public void atualizar(Aluno a) throws SQLException {
		PreparedStatement stmt = null;

		try {
			stmt = conectar.prepareStatement("update alunos set nome = ?, rg = ?, telefone = ? where matricula = ?");

			stmt.setString(1, a.getNome());
			stmt.setString(2, a.getRg());
			stmt.setString(3, a.getTelefone());
			stmt.setLong(4, a.getMatricula());

			int flag = stmt.executeUpdate();

			if (flag == 0)
				throw new SQLException("Falha ao atualizar o registro");

		} finally {
			if (conectar != null)
				conectar.close();
			if (stmt != null)
				stmt.close();
		}
	}

	public static void main(String[] args) {
		AlunoDAO dao = new AlunoDAO();

		Aluno aluno = new Aluno();

		aluno.setNome("Glauco Guerreiro");
		aluno.setRg("12356987-1");
		aluno.setTelefone("3119-7845");

		// salvar
		try {
			dao.salvar(aluno);
			System.out.print("Informações salvas com sucesso");

		} catch (SQLException e) {
			e.printStackTrace();
		}

		aluno.setNome("Glauco G.");
		aluno.setMatricula(1);

		// atualizar
		try {
			dao.atualizar(aluno);
			System.out.println("Atualizado com sucesso");
		} catch (SQLException e) {
			e.printStackTrace();
			System.out.println(e.getMessage());
		}

		// excluir
		try {
			dao.excluir(1L);
			System.out.println("Excluido com sucesso");
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
}
