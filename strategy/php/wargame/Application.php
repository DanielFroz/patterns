<?

class Application {
    public $partners = array();
    public function pushPartner($partner) {
        array_push($this->partners, $partner);
    }
    public function getRates() {
        $result = array();
        foreach ($this->partners as $partner)
            array_push($result, $partner->getRate());
        return $result;
    }
}

?>