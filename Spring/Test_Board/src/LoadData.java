

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/LoadData")
public class LoadData extends HttpServlet {
       
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		
	}
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		System.out.println("��ȣ ����");
		
		List<String> list = new ArrayList();
		//DB�� �ִ� ������ �ޱ�
		list.add("����ȣ");
		list.add("�赿��");
		list.add("������");
		
		response.setContentType("application/json");
        response.setCharacterEncoding("UTF-8");
	}

}
