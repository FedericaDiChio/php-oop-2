<?php

require_once __DIR__ . '/Book.php';

class Ebook extends Book {
    use Product;

    public $format;
    public $size;

    public function __construct($_price, $_title, $_author, $_language,$_format, $_size){
           
        $this->format=$_format;
        $this->size=$_size;
        parent::__construct($_price, $_title, $_author, $_language);

    }

}



$Ebook1 = new Ebook('7,99', 'Memorie di Adriano', 'Marguerite Yourcenar', 'italiano', 'Mobi', '606,2 KB');


?>