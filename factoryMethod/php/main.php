<?

abstract class Application {
	private $isDone = false;
	protected abstract function init();
	protected abstract function idle();
	protected abstract function cleanup();

	protected function setDone() {
		$this->isDone = true;
	}

	protected function done() {
		return $this->isDone;
	}

	protected function run() {
		$this->init();
		while(!$this->done()) {
			$this->idle();
		}
		$this->cleanup();
	}
}

class FtoCTemplateMethod extends Application {
	public function main() {
		$this->run();
	}

	public function init() {
		$a = 2;
	}

	public function idle() {
		$this->isDone = true;
	}

	public function cleanup() {
		$a = 2;
	}
}

function test() {
	assert(0);
}
test();

?>