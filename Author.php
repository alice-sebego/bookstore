<?php
class Author{

    private string $firstname;
    private string $lastname;
    private string $gender;
    private DateTime $birthday;
    private array $books;

    public function __construct(string $firstname, string $lastname, string $gender, string $birthday)
    {
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->gender = $gender;
      $this->birthday = new DateTime($birthday);
      $this->books = [];
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname(){
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     * @return self
     */
    public function setFirstname($firstname){
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname(){
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     * @return self
     */
    public function setLastname($lastname){
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Get the value of gender
     */
    public function getGender(){
        return $this->gender;
    }

    /**
     * Set the value of gender
     * @return self
     */
    public function setGender($gender){
        $this->gender = $gender;
        return $this;
    }

    /**
     * Get the value of birthday
     */
    public function getBirthday(){
        return $this->birthday;
    }

    /**
     * Set the value of birthday
     * @return self
     */
    public function setBirthday($birthday){
        $this->birthday = $birthday;
        return $this;
    }

    public function displayBooks(){
        $result = "Livres de $this<br><ul>";
        foreach ($this->books as $book) {
            $result .= "<li>$book</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function getTotalPriceOfBooks(){
        $result = 0;
        foreach ($this->books as $book) {
            $result += (int)$book->getPrice();
        }
        return "Le prix total de l'ensemble de la bibliographie est de $result €";
    }

    public function getAge(){
        // Soluc' Zamina    
        // $bd = $this->bday;
        // $today = new Datetime(date('d/m/y'));
        // $diff = $today->diff($bd);
        // return 'Age : '.$diff->y.' years.<br>';
        return date_diff(new DateTime(), $this->birthday)->format("%Y");
    }

    public function __toString()
    {
        return "<strong>$this->firstname $this->lastname </strong>" . "( " . $this->getAge() . " ans)<br>" ;
    }

    public function addBook(Book $book){
        $this->books[] = $book;
    }

}
?>