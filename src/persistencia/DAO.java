package persistencia;
	import java.sql.Connection;
	import java.sql.DriverManager;
	import java.sql.SQLException;
	
	
public class DAO {
	public DAO() {
		
		try {
			Class.forName("com.mysql.jdbc.Driver");
			
		}catch (ClassNotFoundException e){
			e.printStackTrace();
		}
	}
	
	protected Connection conexao() throws SQLException{
		Connection conectar = DriverManager.getConnection("jdbc:mysql://localhost:3306/db_escola", "root", "");
		return conectar;
	}
	
	public static void main(String[] args) {
		DAO dao = new DAO();
		
		try {
			dao.conexao();
			System.out.println("conexão bem-sucedida");
		} catch(SQLException e) {
			e.printStackTrace();
			System.out.println("conexão mal-sucedida");
		}
	}
}
