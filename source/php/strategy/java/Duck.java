
public abstract class Duck {
	public abstract void display();

	public SoundBehavior soundBehavior;
	public void setSoundBehavior(SoundBehavior soundBehavior) {
		this.soundBehavior = soundBehavior;
	}

	public void swim() {
		System.out.println("I am swim like decoy!");
	}

	public void sound() {
		this.soundBehavior.sound();
	}
}