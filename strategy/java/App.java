
public class App {
	public static void main(String args[]) {
		
		Duck d = new BlackDuck();
		d.display();
		d.swim();
		d.sound();

		d.setSoundBehavior(new QuackBehavior());
		d.sound();

	}
}