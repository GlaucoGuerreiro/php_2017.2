package servlet;

import java.io.IOException;
import java.sql.SQLException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import dao.ClienteDao;
import model.Cliente;
import model.Contato;
import model.Endereco;

@WebServlet("/adicionaDados")
public class AdicionaDadosServlet extends HttpServlet{
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	@Override
	protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String nome = request.getParameter("nome");
		String telefone = request.getParameter("telefone");
		String logradouro = request.getParameter("logradouro");
		
		Cliente cliente = new Cliente();
		cliente.setNome(nome);
		cliente.setContato(new Contato());
		cliente.getContato().setTelefone(telefone);
		cliente.setEndereco(new Endereco());
		cliente.getEndereco().setLogradouro(logradouro);
		
		ClienteDao dao = new ClienteDao();
		try {
			dao.adicionaDados(cliente);
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
}
