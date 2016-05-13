<?

function main() { 
	$mycomp = new Z12Computer();
	$mycomp->run();
}; main();



abstract class Computer {
	public abstract function run();
}

class Z12Computer {
	private $cpu;
	private $memory;
	private $harddrive;
	public function __construct() {
		$this->cpu = new IntelCoreI3();
		$this->memory = new DDR3();
		$this->harddrive = new SamsungNS830();
	}
	public function run() {
		$this->cpu->run();
		$this->memory->run();
		$this->harddrive->run();
	}
}



abstract class CPU {
	public abstract function run();
}

class IntelCoreI3 extends CPU {
	public function run() { writeln('IntelCoreI3 was running.'); }
}



abstract class Memory {
	public abstract function run();
}

class DDR3 extends Memory {
	public function run() { writeln('DDR3 was running.'); }
}



abstract class HardDrive {
	public abstract function run();
}

class SamsungNS830 extends Memory {
	public function run() { writeln('SamsungNS830 was running.'); }
}



function writeln($string) { echo $string.'<br/>'; }

?>