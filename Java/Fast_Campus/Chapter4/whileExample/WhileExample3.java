package whileExample;

import java.util.Scanner;

public class WhileExample3 {
	
	public static void main(String[] args) {
		
		Scanner s = new Scanner(System.in);
		
		int input = s.nextInt();
		int sum   = 0;
		
		while( input != 0 ) {
			
			input = s.nextInt();
			sum += input;
		}
		
		System.out.println(sum);
	}
}