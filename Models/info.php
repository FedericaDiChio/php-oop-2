<?php

trait Info {

public function getfullName(){
        return $this->name . ' ' . $this->surname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getAddress(){
        return $this->address;
    }


    protected function setDiscount() {
        $this->discount ? 30 : 0;
    }

    public function getDiscount(){
        $this->setDiscount();
        return $this->discount;
    }

   
}



?>    