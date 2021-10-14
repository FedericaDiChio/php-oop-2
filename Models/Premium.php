<?php

require_once __DIR__ . '/User.php';


class Premium extends User {
    
    protected $level;
    
    
    public function __construct($_name, $_surname, $_email, $_address, $_level = 'premium') {
        $this->level=$_level;
        parent::__construct($_name, $_surname, $_email, $_address);

    }

    protected function setDiscount() {
        $this->discount = $this->level ? 30 : 0;
    }

    public function getLevel(){
        return $this->level;
    }

}


$premium1 = new Premium('Carlo', 'Bolelli', 'CarloBolelli@bh.it', 'viale delle primizie'); 
$premium2 = new Premium('Davide', 'Golia', 'DavideGolia@bh.it', 'viale dei castagni'); 

?>