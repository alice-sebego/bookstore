<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Bookstore POO</title>
</head>

<body>
  <h1>Livre</h1>

  <?php
    // Instructions
    include_once "Author.php";
    include_once "Book.php";
    $author1 = new Author("stephen", "king", "male", "1985-12-25");
    echo $author1->getLastname();
    $author1->setFirstname("Burger");
    echo $author1->getFirstname();

    $plague666 = new Book("Plague 666", 1999, 2000, 49.99);
    echo $author1;
    ?>
</body>

</html>