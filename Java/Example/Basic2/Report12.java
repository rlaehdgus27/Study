package class2;

public class Report12 {

	public static void main(String[] args) {
		
		//[4-6] �� ���� �ֻ����� ������ �� ���� ���� 6 �� �Ǵ� ��� ����� ���� ����ϴ� ���α׷��� �ۼ��Ͻÿ�.
		
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
