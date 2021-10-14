<?php
require_once __DIR__ . '/Tablet.php';

class Ereader extends Tablet {
    use Product;
    public $compatibility;


    public function __construct($_price, $_storage, $_color, $_brand, $_compatibility) {
        $this->compatibility=$_compatibility;
        parent::__construct($_price, $_storage, $_color, $_brand, $_compatibility);

    }
}

$Ereader1 = new Ereader('89,99', '16GB', 'Black', 'Kindle', 'Solo file Mobi');
?>

