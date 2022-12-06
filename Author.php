<?php
class Author{

    private string $firstname;
    private string $lastname;
    private string $gender;
    private string $birthday;
    private array $books = [];

    public function __construct($firstname, $lastname, $gender, $birthday)
    {
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->gender = $gender;
      $this->birthday = $birthday;
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

    public function getBooks(){
        return $this->books;
    }

    public function setBooks($books){
        $this->books = $books;
    }

}
?>