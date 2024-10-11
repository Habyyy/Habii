<?php 

class Barang{
    public $id_brg;
    public $nama_brg;
    public $stok_brg;
    public $harga_brg;

    function __construct($id_brg,$nama_brg,$stok_brg,$harga_brg){
        $this->id_brg = $id_brg;
        $this->nama_brg = $nama_brg;
        $this->stok_brg = $stok_brg;
        $this->harga_brg = $harga_brg;
    }
}

?>