<?
require_once('Partner.php');

class BobbaPartner implements Partner {
    public function getRate() {
        return 2;
    }
}

?>