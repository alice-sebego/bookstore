<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/style.css">
  <title>Bookstore POO</title>
</head>
<body>
  <header>
    <div class="logo">
      <img src="assets/images/library_books.svg" alt="Logo Book">
    </div>
    <h1>My Bookstore</h1>
  </header>
  <main>
    <section class="intro">
      <div class="container">
        <div class="description">
          <h2>Introduction</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam id error a rerum sint illo ducimus ad sit repellat quae, magnam impedit, accusantium deserunt fugiat nesciunt quos totam nihil cumque.</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam id error a rerum sint illo ducimus ad sit repellat quae.</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
          <h3>Advantages</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
          <ul>
            <li class="advantage">Lorem ipsum</li>
            <li class="advantage">Lorem ipsum</li>
            <li class="advantage">Lorem ipsum</li>
          </ul>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
          <a href="#" class="cta">Go lorem ipsum</a>

        </div>
        <div class="illustration">
          <img src="https://images.pexels.com/photos/1370298/pexels-photo-1370298.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="bookstore">
        </div>
      </div>
    </section>
    <section class="bookstores">
      <div class="container">

      </div>
    </section>
  <?php
    // -- Instructions --

    // Include all classes that spl_autoload_register has found
    spl_autoload_register(function ($class_name){
      include $class_name. ".php";
    });

    $author1 = new Author("Stephen", "King", "male", "1947-12-25");
    $shawshankRedemption = new Book("Rita Hayworth and Shawshank Redemption", 1982, 2000, 49.99, $author1);
    $salem = new Book("Salem", 1975, 456, 39.99, $author1);
    $shining = new Book("Shining", 1977, 958, 49.99, $author1);

    echo $author1;
    echo "<br>";
    echo $author1->displayBooks();
    echo "<br>";
    echo $author1->getTotalPriceOfBooks();
    //print("<pre>".print_r($shawshankRedemption,true)."</pre>");
    ?>
    </main>
    <footer></footer>
</body>

</html>