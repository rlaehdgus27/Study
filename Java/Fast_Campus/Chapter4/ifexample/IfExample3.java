package ifexample;

import java.util.Scanner;

public class IfExample3 {

	public static void main(String[] args) {
		
		Scanner s = new Scanner(System.in);
		
		int score = s.nextInt();
		
		if ( score >= 90 )
		{
			System.out.println("학점은 A입니다.");
		} 
		else if ( score >= 80 )
		{
			System.out.println("학점은 B입니다.");
		} 
		else if ( score >= 70 )
		{
			System.out.println("학점은 C입니다.");
		}
		else if ( score >= 60 )
		{
			System.out.println("학점은 D입니다.");
		} else
		{
			System.out.println("학점은 F입니다.");
		}
		
		System.out.println("점수 : " + score);
	}
}
