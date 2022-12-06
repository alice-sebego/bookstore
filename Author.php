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

    public function getFirstname(){
        return $this->firstname;
    }

    public function setFirstname($firstname){
        $this->firstname = $firstname;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function setLastname($lastname){
        $this->lastname = $lastname;
    }

    public function getGender(){
        return $this->gender;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getBirthday(){
        return $this->birthday;
    }

    public function setBirthday($birthday){
        $this->birthday = $birthday;
    }

    public function displayBooks(){
        $allBooks = implode(", ", $this->books);
        return $allBooks;
    }

    // public function setBooks($books){
    //     $this->books = $books;
    // }

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

    public function addBook(string $book){
        $this->books[] = $book;
    }

}
?>