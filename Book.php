<?php
class Book{

    private string $title;
    private int $parution;
    private int $pagesNb;
    private float $price;
    private Author $author;

    public function __construct(string $title, int $parution, int $pagesNb, float $price, Author $author)
    {
        $this->title = $title;
        $this->parution = $parution;
        $this->pagesNb = $pagesNb;
        $this->price = $price;
        $this->author = $author; 
        // Add a book on the autor bookstore when we instanciate a book
        // with an object author instanciated
        $this->author->addBook($this);
    }

    /**
     * Get the value of title
     */ 
    public function getTitle(){
        return $this->title;
    }

    /**
     * Set the value of title
     * @return self
     */
    public function setTitle($title){
        $this->title = $title;
        return $this;
    }

    /**
     * Get the value of year of parution
     */ 
    public function getParution(){
        return $this->parution;
    }

    /**
     * Set the value of year of parution
     * @return self
     */
    public function setParution($parution){
        $this->parution = $parution;
        return $this;
    }

    /**
     * Get the value of number of pages
     */ 
    public function getPagesNb(){
        return $this->pagesNb;
    }

    /**
     * Set the value of number of pages
     * @return self
     */
    public function setPagesNb($pagesNb){
        $this->pagesNb = $pagesNb;
        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice(){
        return $this->price;
    }

    /**
     * Set the value of price
     * @return self
     */
    public function setPrice($price){
        $this->price = $price;
        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    public function __toString()
    {
        return "<strong>$this->title</strong> ($this->parution) / $this->pagesNb pages - $this->price €<br>";
    }

} 
?>