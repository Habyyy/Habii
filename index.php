<?php
require_once 'model/role_model.php';
session_start();

if(isset($GET['modul'])){
    $modul =$_GET['modul'];
}else{
    $modul = 'dashboard';
}
switch ($modul){
    case 'dashboard':
        include 'views/kosong.php';
        break;
    case 'role':
        $fitur = isset($_GET['fitur'])? $_GET['fitur'] : null;
        $obj_modelrole = new RoleModel();
        switch($fitur){
            case 'add':
                $role_name = $_POST['role_name'];
                $role_description = $_POST['role_description'];
                $role_status = $_POST['role_status'];

                $obj_modelrole->addRole($role_name, $role_description, $role_status);

                header ('location : index.php?modul=role');

                break;
            default :
                $roles = $obj_modelrole->getRoles();
                include 'views/role_list.php';

        }
        break;
}















// require_once 'domain_object/node_role.php';
// $obj_role = [];
// $obj_role[] = new Role(1, $_POST['role_name'], $_POST['role_description'], $_POST['role_status']);
// include 'views/role_list.php';
?>