package class2;

public class Report16 {

	public static void main(String[] args) {
		      
		//[4-13] ������ �־��� ���ڿ� (value) �� ���������� �Ǻ��ϴ� ���α׷��̴� (1) �� �˸��� �ڵ带 �־ ���α׷��� �ϼ��Ͻÿ�.
		
		String value = "12o34";
        char ch = ' ';
        boolean isNumber = true;
        // charAt(int i) �ݺ����� �� �̿��ؼ� ���ڿ��� ���ڸ� �ϳ��� �о �˻��Ѵ�
        
        for(int i=0; i < value.length() ;i++) {
            
        	ch = value.charAt(i);
       
        	if ( '0' <= ch && '9' >= ch ) {
        	
        	isNumber = false;
        	
        	}
        }
        
        if (isNumber) {
            System.out.println(value + "�� �����Դϴ�."); 
        } else {
            System.out.println(value + "�� ���ڰ� �ƴմϴ�."); 
        }

		
		
		
	}
}
