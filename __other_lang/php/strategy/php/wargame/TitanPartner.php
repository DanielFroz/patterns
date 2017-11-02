<?
require_once('Partner.php');

class TitanPartner implements Partner {
    public function getRate() {
        return 1;
    }
}

?>