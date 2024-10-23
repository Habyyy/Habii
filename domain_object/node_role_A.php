<?php
class Mahasiswa {
   public $nama;
   public $npm;

   function __construct($nama,$npm){
      $this->nama = $nama;
      $this->npm = $npm;
   }

   function infomahasiswa(){
      echo "Nama : ".$this->nama. "<br>";
      echo "Npm : ".$this->npm. "<br>";
   }
}
?>