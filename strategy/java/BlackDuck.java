
public class BlackDuck extends Duck {	
	public BlackDuck() {
		this.soundBehavior = new MuteBehavior();
	}

	public void display() {
		System.out.println("Display BlackDuck!");
	}
}