package Class;


//[3-3] 아래는 변수 의 값에 따라 num 을 ‘0’ ‘음수’ ‘양수’  출력하는 코드이다 삼항 연산자를 
//이용해서 에 알맞은 코드를 넣으시오 
//[Hint] 삼항 연산자를 두 번 사용하라.
//==============================================================

public class report3 {
	public static void main(String[] args) {
        int num = 10;
        System.out.println( num > 0 ? "양수  " : num < 0 ? "음수" : 0 );
    }
}
