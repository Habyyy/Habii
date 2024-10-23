<?php
require_once "domain_object/node_role_A.php";

class Universitas{
    public $universitas;
    public $mahasiswalist = [];

    function __construct($universitas){
        $this->universitas = $universitas;
    }

    function tambahmahasiswa(Mahasiswa $mahasiswa){
        $this->mahasiswalist[] = $mahasiswa;
    }

    function getinfouniversitas(){
        echo "Nama Universitas : ".$this->universitas."<br>";
        echo "Daftar Mahasiswa : "."<hr>";
        foreach ($this->mahasiswalist as $mhs){
            echo $mhs->infomahasiswa()."<hr>";
        }
    }

}
?>