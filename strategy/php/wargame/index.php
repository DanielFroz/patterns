<?
require_once('Application.php');
require_once('TitanPartner.php');
require_once('BobbaPartner.php');

function test() {
    $app = new Application();
    $app->pushPartner(new TitanPartner());
    $app->pushPartner(new BobbaPartner());
    $rates = $app->getRates();
    assert($rates[0]==1 and $rates[1]==2);
}; test();

?>