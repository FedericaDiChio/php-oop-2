<?php

require_once __DIR__ . '/Info.php';


class User {
    use Info;
    
 
    // PROPERTIES 
    protected $name;
    protected $surname;
    protected $email;
    protected $address;
    protected $discount;
    
    // CONSTRUCTOR
    public function __construct($_name, $_surname, $_email, $_address, $_discount = 0){
        
        
        
        $this->name=$_name;
        $this->surname=$_surname;
        $this->email=$_email;
        $this->address=$_address;
        $this->discount=$_discount;
        
    }

  

}

// ISTANZA USER 

$user1 = new User('Mario', 'Rossi', 'MarioRossi@bh.it', 'viale della primavera'); 

?>