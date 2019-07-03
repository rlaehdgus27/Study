package operator;

public class OperatorEx4 {
	
	public static void main(String[] args) {
		
		int num = 10;
		int i = 2;
		
		boolean value = ( (num = num + 10) < 10 ) && ( (i = i + 2) < 10 );
		
		System.out.println(num);
		System.out.println(i);
		System.out.println(value);
		
		boolean value1 = ( (num = num + 10) < 10 ) || ( (i = i + 2) < 10 );
		
		System.out.println(num);
		System.out.println(i);
		System.out.println(value1);
		
		int a = 50;
		int b = 55;
		int max = (a > b)? a : b;
		
		System.out.println(max);
	}
}
