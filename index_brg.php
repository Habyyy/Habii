<?php

require_once 'domain_object/node_role.php';
require_once 'domain_object/node_barang.php';


$obj_brg = [];
$obj_brg[] = new Barang (5,"Shampoo",200,15000);
$obj_brg[] = new Barang (6.,"Sabun",100,10000);
$obj_brg[] = new Barang (7,"Detergen",400,45000);
$obj_brg[] = new Barang (8,"Odol",90,56000);

// foreach ( $obj_brg as $barang){
//     echo "Id Barang : ".$barang->id_brg."<br>";
//     echo "Nama Barang : ".$barang->nama_brg."<br>";
//     echo "Stok Barang : ".$barang->stok_brg."<br>";
//     echo "Harga Barang : ".$barang->harga_brg."<br>";
//     echo "<br>";
// }

include 'views/brg_list.php';

?>