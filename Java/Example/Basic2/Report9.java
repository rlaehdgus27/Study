package class2;

public class Report9 {

	public static void main(String[] args) {
		
		//[4-2] 1 ���� 20 ������ ���� �߿��� 2 �Ǵ� 3�� ����� �ƴ� ���� ������ ���Ͻÿ�.
		
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