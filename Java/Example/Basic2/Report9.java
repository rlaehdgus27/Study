package class2;

public class Report9 {

	public static void main(String[] args) {
		
		//[4-2] 1 부터 20 까지의 정수 중에서 2 또는 3의 배수가 아닌 수의 총합을 구하시오.
		
		int i;
		int sum = 0;
		
		for( i=1; i<=20; i++ ) {
			
			if( (i%2 != 0) && (i%3 != 0) ) {
				
				sum += i;
			}
		}
		System.out.println(sum);
	}
}