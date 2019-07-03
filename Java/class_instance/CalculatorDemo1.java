package class_instance;

class Calculator {
	
	static double PI = 	3.14;
	int reft, right;
	
	public void setOprands(int reft, int right) {
		this.reft  = reft;
		this.right = right; 
	}

	public void sum() {
		System.out.println(this.reft + this.right);
	}
	
	public void avg() {
		System.out.println((this.reft * this.right) / 2);
	}
}
	
public class CalculatorDemo1{
	
	public static void main(String[] args) {
		
		Calculator c1 = new Calculator();
        System.out.println(c1.PI);
 
        Calculator c2 = new Calculator();
        System.out.println(c2.PI);
 
        System.out.println(Calculator.PI);
		
		
	}
}
