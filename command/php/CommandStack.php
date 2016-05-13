<?php

function testPushCommandsInStack() {
	$cs = new CommandStack();
	$cs->push(new CreateBusinesProcessCommand('Unnamed Busines Process'));
	$cs->push(new CreateStageCommand('Stage Zero'));
	$cs->push(new CreateStageCommand('Stage First'));
	$cs->push(new CreateStageCommand('Stage Second'));
	$cs->execute();
}

function testCreateCommandStack() {
	$cs = new CommandStack(
		new CreateBusinesProcessCommand('Unnamed Busines Process'));
		new CreateStageCommand('Stage Zero'));
		new CreateStageCommand('Stage First'));
		new CreateStageCommand('Stage Second'));
	);
	$cs->execute();
}

class CommandParser {}

class CommandStack {
	public function push($command) {
		array_push($this->commands, $command);
	}
	public function execute() {
		foreach($this->commands as $command)
			$command->execute();
	}
}

interface Command {
	public function execute();
}

class CreateBusinesProcessCommand implements Command {
	public function execute() {
		//
	}
}

?>