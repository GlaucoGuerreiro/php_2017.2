package dao;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class Conexao {
	
	public Connection pegar() {
		try {
			
			Class.forName("com.mysql.jdbc.Driver");
		} catch(ClassNotFoundException e) {
			e.printStackTrace();
		}
		
		try {
			return DriverManager.getConnection("jdbc:mysql://localhost:3306/bancoteste", "root", "");
		} catch(SQLException e) {
			throw new RuntimeException(e);
		}
	}
	public static void main(String[] args) throws SQLException {
		Connection con = new Conexao().pegar();
		System.out.println("Conectado");
		con.close();
	}
}
