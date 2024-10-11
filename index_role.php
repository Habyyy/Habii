<?php

require_once 'domain_object/node_role.php';
require_once 'domain_object/node_barang.php';


$obj_role = [];
$obj_role[] = new Role (1,"Kasir","Dibuat untuk kasir",1);
$obj_role[] = new Role (2,"Admin","Dibuat untuk Admin",1);
$obj_role[] = new Role (3,"Owner","Dibuat untuk yang punyar",0);
$obj_role[] = new Role (4,"Customer","Dibuat untuk pelanggan",1);


// foreach ($obj_role as $role){
    
//     echo "Id role : ".$role->role_id."<br>";
//     echo "Nama role : ".$role->role_name."<br>";
//     echo "Keterangan role : ".$role->role_description."<br>";
//     echo "Status role : ".$role->role_status."<br>";
//     echo "<br>";
// }
include 'views/role_list.php';

?>