package class2;

public class Report10 {
	
	public static void main(String[] args) {
		
		//[4-4] 1+(1+2)+(1+2+3)+(1+2+3+4)+...+(1+2+3+...+10) . 의 결과를 계산하시오.
		
		int i;
		int sum  = 0;
		int sum1 = 0;
		
		for(i = 1; i <= 10; i++) {
			
			sum  = sum + i;
			sum1 = sum1 + sum;
		}
		
		System.out.println(sum1);
	}

}
