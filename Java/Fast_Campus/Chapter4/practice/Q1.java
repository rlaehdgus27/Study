package practice;


public class Q1 {

	public static void main(String[] args) {
		
		char operator = '*';
		
		int a = 10;
		int b = 5;
		int result = 0;
		
		if(operator == '+') {
			
			result = a + b;
			
		}else if(operator == '-') {
			
			result = a - b;
			
		}else if(operator == '*') {
			
			result = a * b;
			
		}else if(operator == '/'){
			
			result = a / b;
		}else {
			System.out.println("오류입니다");
			return;
		}
		System.out.println("값은" + result + "입니다");
		
	}
}
