package cal;

public class Calculate {

	public static void main(String[] args) {
		
		// Master 객체를 가지고 와서(생성), 객체가 가지고 있는 기능을 사용한다.
		
		// 객체화 , 인스턴스화
		// 데이터타입 변수명
		// 클래스 사용할이름 = new 생성자
		
		Master ma1 = new Master();
		
		ma1.sum(50, 41);
		ma1.avg(35135158, 12564618);
		ma1.admin("1235", 33, 60);
		ma1.admin("1234", 33, 60);
		
	}

}
