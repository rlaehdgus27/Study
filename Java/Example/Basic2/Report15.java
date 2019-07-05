package class2;

public class Report15 {

	public static void main(String[] args) {
		      
		//[4-11] 2단 부터 9단 까지 구구단을 반복문을 통해 출력하시오.
		
		int i, j;
		
		for( i = 1; i <= 9; i++) {
			for( j = 2; j <= 9; j++) {
				
				System.out.printf(" %3d X %d = %2d" , j, i, i * j);
			}
			System.out.printf("\n");
		}
	}
}
