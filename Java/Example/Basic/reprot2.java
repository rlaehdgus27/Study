package Class;

public class reprot2 {

	 public static void main(String[] args) {
         int numOfApples = 123; // ����� ����
         int sizeOfBucket = 10; // ( ) �ٱ����� ũ�� �ٱ��Ͽ� ���� �� �ִ� ����� ����
         int numOfBucket = ( (numOfApples / sizeOfBucket) + (numOfApples % sizeOfBucket > 0 ? 1 : 0)); // ��� ����� ��µ� �ʿ��� �ٱ����� ��
         System.out.println(" :"+numOfBucket); // �ʿ��� �ٱ����� ��
     }
}