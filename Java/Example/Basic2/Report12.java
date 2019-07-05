package class2;

public class Report12 {

	public static void main(String[] args) {
		
		//[4-6] 두 개의 주사위를 던졌을 때 눈의 합이 6 이 되는 모든 경우의 수를 출력하는 프로그램을 작성하시오.
		
		int i   = 0;
		int j   = 0;
		int sum = 0;
		
		for(i = 1; i <= 6; i++) {
			
			for ( j = 1; j <= 6; j++) {
				
				sum = i+j;
				if(sum == 6) {

					System.out.println( i + "+" + j + "=" + sum);
				}
			}
		}
	}
}
