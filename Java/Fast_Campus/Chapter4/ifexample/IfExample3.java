package ifexample;

import java.util.Scanner;

public class IfExample3 {

	public static void main(String[] args) {
		
		Scanner s = new Scanner(System.in);
		
		int score = s.nextInt();
		
		if ( score >= 90 )
		{
			System.out.println("������ A�Դϴ�.");
		} 
		else if ( score >= 80 )
		{
			System.out.println("������ B�Դϴ�.");
		} 
		else if ( score >= 70 )
		{
			System.out.println("������ C�Դϴ�.");
		}
		else if ( score >= 60 )
		{
			System.out.println("������ D�Դϴ�.");
		} else
		{
			System.out.println("������ F�Դϴ�.");
		}
		
		System.out.println("���� : " + score);
	}
}
