<?php
require_once 'domain_object/node_role_i.php';

Class Mobil extends Kendaraan{
    public $turbo;

    function __construct($type, $torsi, $cc, $bbm, $turbo){
        parent::__construct($type,$torsi,$cc,$bbm);
        $this->turbo = $turbo;
    }

    function getinfomobil(){
        echo "Type : ".$this->type."<br>";
        echo "Torsi : ".$this->torsi."<br>";
        echo "Cc : ".$this->cc."<br>";
        echo "Bbm : ".$this->bbm."<br>";
        echo "Type Turbo : ".$this->turbo."<br>";
        echo "<hr>";
    }
 }
    