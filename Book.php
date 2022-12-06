<?php
class Book{

    private string $title;
    private string $parution;
    private int $pagesNb;
    private int $price;

    public function __construct($title, $parution, $pagesNb, $price)
    {
        $this->title = $title;
        $this->parution = $parution;
        $this->pagesNb = $pagesNb;
        $this->price = $price;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getParution(){
        return $this->parution;
    }

    public function setParution($parution){
        $this->parution = $parution;
    }

    public function getPagesNb(){
        return $this->pagesNb;
    }

    public function setPagesNb($pagesNb){
        $this->pagesNb = $pagesNb;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }
} 
?>