package cal;

public class Master {
	
	// ������
	public Master() {
		
	}
	
	// Parameter ���� 2�� �ޱ�� �Ѵ�.(Ÿ�� : ���� // �̸� : leftValue, rightValue)
	// public sum
	// public avg
	// private sumAvg
	
	public void sum(int leftValue, int rightValue) {
		int result = leftValue + rightValue;
		System.out.println(result);
	}
		
	public void avg(int leftValue, int rightValue){
		int result = (leftValue + rightValue) / 2 ;
		System.out.println(result);	
		
	}
	
	private void sumAvg(int leftValue, int rightValue) {
		//���ϱ�
		int sumResult = leftValue + rightValue;
		System.out.println(sumResult);
		
		//���
		int avgResult = (leftValue + rightValue) / 2;
		System.out.println(avgResult);
		
	}
	
	// �����ڱ�� -> ��й�ȣ�Է½�, ������ sumAvg ȣ��
	// ��� 1234
	public void admin(String password, int leftValue ,int rightValue) {
		
		if(password.equals("1234")) {
			sumAvg(leftValue, rightValue);
		} else {
			System.out.println("����� �����ڰ� �ƴ϶� �� ����� ����Ҽ�����.");
			
		}
		
	}
}
