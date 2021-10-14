<?php

class Book {
    use Product;

    public $title;
    public $author;
    public $language;
    public $publisher;
    public $lenght;

    public function __construct($_price, $_title, $_author, $_language){
           
        $this->price=$_price;
        $this->title=$_title;
        $this->author=$_author;
        $this->color=$_language;
    }

    

}
$Book1 = new Book('13,00', 'Memorie di Adriano', 'Marguerite Yourcenar', 'italiano');
?>