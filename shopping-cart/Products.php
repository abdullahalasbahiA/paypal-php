<?php

class Products {

    private $products;
    
    // initialize the products
    public function __construct()
    {
        include 'database/data.php';
        $this->products = $database['products'];
    }

    public function getAllProducts(){
        return $this->products;
    }

    public function getProductById($id){
        return $this->products[$id];
    }

}