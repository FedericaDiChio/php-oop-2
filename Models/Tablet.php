<?php 



trait Product {

    public $description;
    public $price;

}


class Tablet {
    use Product; 

    public $specs;
    public $storage;
    public $color;
    public $brand;
    public $size;


    public function __construct($_price, $_storage, $_color, $_brand){
           
        $this->price=$_price;
        $this->storage=$_storage;
        $this->color=$_color;
        $this->brand=$_brand;
     
    }


}

$Tablet1 = new Tablet('399,99', '16GB', 'Grigio', 'Samsung');
?>
