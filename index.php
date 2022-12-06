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
    // -- Instructions --

    // Include all classes that spl_autoload_register has found
    spl_autoload_register(function ($class_name){
      include $class_name. ".php";
    });

    $author1 = new Author("stephen", "king", "male", "1985-12-25");
    echo $author1->getLastname()." ";
    $author1->setFirstname("Burger");
    echo $author1->getFirstname();
    echo "<br>";

    $plague666 = new Book("Plague 666", 1999, 2000, 49.99, $author1);
    echo $author1;
    echo $plague666;
    $salem = new Book("Salem", 1975, 456, 39.99, $author1);
    echo "<br>";
    $shining = new Book("Shining", 1977, 958, 49.99, $author1);
    print("<pre>".print_r($plague666,true)."</pre>");
    echo $author1->displayBooks();
    echo "<br>";
    echo $author1->getTotalPriceOfBooks();
    ?>
</body>

</html>