package class2;

public class Report14 {

	public static void main(String[] args) {
		      
		//[4-10] int Ÿ���� ���� num�� ���� ��, �� �ڸ��� ���� ���� ����� ����ϴ� �ڵ带
		//�ϼ��϶� ���� ���� num �� ���� 12345 ��� , ��1+2+3+4+5�� �� ����� 15�� ����϶�. (1)�� �˸��� �ڵ带 �����ÿ�.
		//[ ] ���� ���ڿ��� ��ȯ���� ���� ���ڷθ� ó���ؾ� �Ѵ�.
		
		int num = 12345;
		int sum = 0;
		
		while ( num > 0) {
			sum += num%10;
			num /= 10;
		}
		 
		System.out.println("sum="+sum);
	}
}
