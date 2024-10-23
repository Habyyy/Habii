<?php
class Kendaraan{
    public $type;
    public $torsi;
    public $cc;
    public $bbm;

    function __construct($type,$torsi,$cc,$bbm){
        $this->type = $type;
        $this->torsi = $torsi;
        $this->cc = $cc;
        $this->bbm = $bbm;
    }
}
?>