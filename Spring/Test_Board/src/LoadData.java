

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
		System.out.println("신호 받음");
		
		List<String> list = new ArrayList();
		//DB에 있는 데이터 받기
		list.add("윤상호");
		list.add("김동현");
		list.add("김한주");
		
		response.setContentType("application/json");
        response.setCharacterEncoding("UTF-8");
	}

}
