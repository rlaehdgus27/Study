package practice;

import java.util.Scanner;

public class Q2 {

	public static void main(String[] args) {
		
		System.out.println("Ȧ������ �Է��ϼ���: ");
		
		Scanner s = new Scanner(System.in);
		
		int	lineCount 	= s.nextInt();
		int spaceCount	= lineCount/2 +1;
		int startCount	= 1;
		
		for (int i = 0; i < lineCount; i++) {
			
			for (int j = 0; j < spaceCount; j++) {
				System.out.print(' ');
			}
			
			for (int j = 0; j < startCount; j++) {
				System.out.print('*');
			}
			
			for (int j = 0; j < spaceCount; j++) {
				System.out.print(' ');
			}
			
			if (i < lineCount  /  2) {
					spaceCount -= 1;
					startCount += 2;
			}
			else {
					spaceCount += 1;
					startCount -= 2;
			}
			System.out.println();
		}
	}
}
