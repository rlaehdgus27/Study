package report;

public class Operator_report2 {
	
	//[4-1] 다음의 문장들을 조건식으로 표현하라.
	//1. int 형 변수 x가 10보다 크고  20보다 작을 때 true 인 조건식
	//2. char 형 변수 ch가 가 공백이나 탭이 아닐 때 true 인 조건식
	//3. char 형 변수 ch가  'x' 또는 'X' 일 때  true 인 조건식
	//4. char 형 변수  ch 가 숫자(‘0’~‘9’)일 때 true 인 조건식 
	//5. char 형 변수 ch 가  영문자  (대문자 또는 소문자 ) 일 때 인 true 조건식
	//6. int 형 변수 year 가 400으로 나눠떨어지거나 4로 나눠떨어지고 또는 100 으로 나눠떨어지지 않을 때 true 인 조건식 
	//7. boolean 형 변수 powerOn 가 false 일 때  true 인 조건식
	//8. 문자열 참조변수 str 이  “yes”일 때  true 인 조건식


	//[4-2] 1 부터 20 까지의 정수 중에서 2 또는 3의 배수가 아닌 수의 총합을 구하시오.


	//[4-4] 1+(1+2)+(1+2+3)+(1+2+3+4)+...+(1+2+3+...+10) . 의 결과를 계산하시오.


	//[4-5] 다음의 for 문을 while문으로 변경하시오  .
	//----------------------------------------------------------------
	    public static void main(String[] args) {
	        for(int i=0; i<=10; i++) {
	            for(int j=0; j<=i; j++){
	                System.out.print("*");
	            }
	            System.out.println();
	        }
	    } // end of main
	// end of class
	//----------------------------------------------------------------



	//[4-6] 두 개의 주사위를 던졌을 때 눈의 합이 6 이 되는 모든 경우의 수를 출력하는 프로그램을 작성하시오.



	//[4-7] Math.random() 을 이용해서  1부터  6사이의 임의의 정수를 변수 value에 저장하는
	//코드를 완성하라 에 알맞은 코드를 넣으시오 . 

	    public static void main(String[] args) {
	        int value = ( /* (1) */ );
	        System.out.println("value:"+value);
	    }
	


	//[4-10] int 타입의 변수 num이 있을 때, 각 자리의 합을 더한 결과를 출력하는 코드를
	//완성하라 만일 변수 num 의 값이 12345 라면 , ‘1+2+3+4+5’ 의 결과인 15를 출력하라. (1)에 알맞은 코드를 넣으시오.
	//[ ] 주의 문자열로 변환하지 말고 숫자로만 처리해야 한다.

	    public static void main(String[] args) {
	        int num = 12345;
	        int sum = 0;
	        /*
	        (1) . 알맞은 코드를 넣어 완성하시오
	        */
	        System.out.println("sum="+sum);
	    }
	}
	//[ ] 실행결과
	//15




	//[4-11] 2단 부터 9단 까지 구구단을 반복문을 통해 출력하시오.





	//[4-13] 다음은 주어진 문자열 (value) 이 숫자인지를 판별하는 프로그램이다 (1) 에 알맞은 
	//코드를 넣어서 프로그램을 완성하시오.

	public static void main(String[] args){
	        String value = "12o34";
	        char ch = ' ';
	        boolean isNumber = true;
	        // charAt(int i) 반복문과 를 이용해서 문자열의 문자를 하나씩 읽어서 검사한다
	        
	        for(int i=0; i < value.length() ;i++) {
	            /*
	            (1) . 알맞은 코드를 넣어 완성하시오
	            */
	        }
	        
	        
	        if (isNumber) {
	            System.out.println(value+" ."); 는 숫자입니다
	        } else {
	            System.out.println(value+" ."); 는 숫자가 아닙니다
	        }
	        
	        
	    } // end of main
	} // end of class

	//[ ] 실행결과
	//12o34 는 숫자가 아닙니다.





}
