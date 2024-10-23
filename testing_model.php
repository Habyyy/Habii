<?php

require_once 'model/role_model.php';
session_start(); 
session_destroy();

$obj_role = new RoleModel();
$obj_role->addRole("admin","untuk admin",0);
$obj_role->addRole("kasir","untuk kasir",1);
$obj_role->addRole("customer","untuk pengguna",2);

foreach ($obj_role->getRoles() as $role){
    echo "Role ID : " . $role->role_id . "<br>";
    echo "Role Name: " . $role->role_name . "<br>";
    echo "Description: " . $role->role_description . "<br>";
    echo "Status: " . $role->role_status . "<br><br>";
}

// ADD DATA ROLE 
echo "== default data role =="."<br>"; 
echo "== add new role ==", "<br>";
$objRole->addRole( "new role",  "testing new role",  8);
$objRole->addRole( "very new role", "testing new new role",  1);
foreach ($objRole->getRoles() as $role){
    echo "role id: ".$role->role_id."<br>";
    echo "role name: ".$role->role_name."<br>"; echo "role desc: ".$role->role."<br>";
    echo "role status: ".$role->role_status. "<br><br>";
}


//UPDATE
echo "== update data role =="."<br>";
$objRole->updateRole (1,"update role","role terupdate",1);
foreach ($objRole->getRoles() as $role) {
    echo "role id: ".$role->role_id."<br>";
    echo "role name: ".$role->role_name."<br>";
    echo "role desc: ".$role->role_description."<br>";
    echo "role status: ".$role->role_status."<br><br>";
}

//DELETE
echo "== delete data role =="."<br>";
$objRole->deleteRole(1);
foreach ($objRole->getRoles() as $role) {
    echo "role id: ".$role->role_id."<br>";
    echo "role name: ".$role->role_name."<br>";
    echo "role desc : ".$role->role_description."<br>";
    echo "role status : ".$role->role_status."<br><br>";
}





?>

