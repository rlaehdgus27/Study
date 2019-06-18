package cal;

public class Master {
	
	// 생성자
	public Master() {
		
	}
	
	// Parameter 갑을 2개 받기로 한다.(타입 : 정수 // 이름 : leftValue, rightValue)
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
		//더하기
		int sumResult = leftValue + rightValue;
		System.out.println(sumResult);
		
		//평균
		int avgResult = (leftValue + rightValue) / 2;
		System.out.println(avgResult);
		
	}
	
	// 관리자기능 -> 비밀번호입력시, 맞으면 sumAvg 호출
	// 비번 1234
	public void admin(String password, int leftValue ,int rightValue) {
		
		if(password.equals("1234")) {
			sumAvg(leftValue, rightValue);
		} else {
			System.out.println("당신은 관리자가 아니라 이 기능을 사용할수없다.");
			
		}
		
	}
}
