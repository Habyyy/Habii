<?php 
require_once 'domain_object/node_role.php';

CLass Role_Model{
    public $roles =[];
    public $next_id=1;
    public function __construct(){
        if(isset($_SESSION['roles'])){
            $this->roles = unserialize($_SESSION['roles']);
            $this->next_id = count($this->roles);
        }else{
            $this->intialiazeDefaultRole();
        }
    }
    public function intialiazeDefaultRole(){
        $this->addRole("Admin", "Administrator", 1);
        $this->addRole("User","Customer/member", 2);
        $this->addRole("Kasir", "Pembayaran", 3);
    }
    public function addRole($role_name, $role_description, $role_status){
        $peran = new Role($this->next_id++, $role_name, $role_description, $role_status);
        $this->roles[] = $peran; // Memperbaiki nama variabel
        $this->savetosession();
    }
    private function savetosession(){
        $_SESSION['roles'] = serialize($this->roles);
    }
    public function getRoles(){
        return $this->roles;
    }
    public function getrolesbyid($role_id){
        foreach($this->roles as $role){
            if($role->role_id == $role_id){
                return $role;
            }
        }
        return null;
    }
    public function getRoleByName($role_name){
        foreach ($this->roles as $role){
            if($role->role_name == $role_name){
                return $role;
            }
        }
    }
    public function updateRole($role_id, $role_name, $role_description, $role_status){
        foreach($this->roles as $role){
            if ($role->role_id == $role_id) {
                $role->role_name = $role_name;        
                $role->role_description = $role_description;        
                $role->role_status = $role_status;        
                $this->saveToSession();        
                return true;        
            }        
        }        
        return false;        
    } 
    public function deleteRole($role_id){
        foreach($this->roles as $key => $role){    
            if($role->role_id == $role_id) {        
                unset($this->roles[$key]);        
                $this->roles = array_values($this->roles); // Reindex array        
                $this->saveToSession();        
                return true;        
                }        
            }        
            return false;        
        }
    }
?>