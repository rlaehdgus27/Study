package whileExample;

import java.util.Scanner;

public class DoWhileExample2 {
	
	public static void main(String[] args) {
		
		Scanner s = new Scanner(System.in);
		
		int input;
		int sum = 0;
		
		do {
		
			input = s.nextInt();
			sum += input;
			
		}while( input != 0);
		
		System.out.println(sum);
		 
	}
}