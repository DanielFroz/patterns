<?

function main() {
	$id = 1;
	$emp = DB::getEmployee($id);
	if($emp->isTimeToPay('29.02.2018')) {
		$emp->pay();
	}
}; main();

abstract class Employeee {
	abstract function isTimeToPay($time);
	abstract function pay();
	static $null;
}

class NullEmployee extends Employeee {
	function isTimeToPay($time) { return false; }
	function pay() {}
}


class DB {
	static function getEmployee($empid) {
		return new NullEmployee();
	}
}

?>