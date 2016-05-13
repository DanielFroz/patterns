<?
$mediator = new ConcreteMediator();
$producer = new Producer($mediator);
$consumer = new Consumer($mediator);
$mediator->setProducer($producer);
$mediator->setConsumer($consumer);

$client = new Client();
$client->setProducer($producer);
$client->setMediator($mediator);
$client->setConsumer($consumer);
$client->run();

abstract class Coleague {
	private $mediator;
	public function __construct($mediator) { $this->mediator = $mediator; }
}
class Producer extends Coleague {
	private $mediator;
}
class Consumer extends Coleague {
	private $mediator;
}

abstract class Mediator {
	public abstract	function send($message, $coleague);
}
class ConcreteMediator extends Mediator {
	private $producer;
	private $consumer;
	public function setConsumer($consumer) { $this->consumer = $consumer; }
	public function setProducer($producer) { $this->producer = $producer; }
	public function send($message, $coleague) { 
		if($coleague == $producer) 
			$this->producer->send($message);
		else
			$this->consumer->send($message);
	}
}

class Client {
	private $producer;
	private $mediator;
	private $consumer;
	public function setProducer($producer) { $this->producer = $producer; }
	public function setMediator($mediator) { $this->mediator = $mediator; }
	public function setConsumer($consumer) { $this->consumer = $consumer; }
	public function run() {
		echo 'Hello';
	}
}

?>