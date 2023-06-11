<?php

require 'functions.php';

$title = 'Home';

$kuliner = query("SELECT * FROM kuliner");

?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tubes</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
</head>

<body>
  <!-- header section-->
  <header>
    <a href="#" class="logo">Food<span>Fun</span></a>

    <ul class="navbar">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#menu">Menu</a></li>
      <li><a href="#pesanan">Pesanan</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>

    <div class="h-icons">
      <a href="registrasi.php"> <i class='bx bxs-user-circle'></i></a>
    </div>

</body>

</html>
</div>
</header>

<!-- home section-->
<section class="home" id="home">
  <div class="home-text">
    <h1><span>WELCOME</span>to The world of Tasty & Fresh Food</h1>
    <P>Molestie ac feugiat sed lectus. Cursus sit amet<br>dictum sit awet.
      Egestas diam in arcu</P>
    <a href="#menu" class="btn">Blok a Table</a>
  </div>

  <div class="home-img">
    <img src="img/home.png">
  </div>
</section>


<!-- container section-->
<section class="container">
  <div class="main-text">
    <h2>Break Fast</h2>
    <P>9.00-11.00</P>
  </div>

  <div class="container-box">
    <div class="c-mainbx">
      <div class="cointainer-img">
        <img src="img/a1.png">
      </div>
      <div class="container text">
        <P>Tasty & Fresh Food</P>
      </div>
    </div>


    <div class="c-mainbx">
      <div class="cointainer-img">
        <img src="img/a2.png">
      </div>
      <div class="container text">
        <P>Tasty & Fresh Food</P>
      </div>
    </div>


    <div class="c-mainbx">
      <div class="cointainer-img">
        <img src="img/a3.png">
      </div>
      <div class="container text">
        <P>Tasty & Fresh Food</P>
      </div>
    </div>


    <div class="c-mainbx">
      <div class="cointainer-img">
        <img src="img/a4.png">
      </div>
      <div class="container text">
        <P>Tasty & Fresh Food</P>
      </div>
    </div>
  </div>
</section>

<!-- about section -->
<section class="about" id="about">
  <div class="about-img">
    <img src="img/about.png">
  </div>

  <div class="about-text">
    <h2>The Healthy Food <br> For whalty Mood</h2>
    <p> Molestie ac feugiat sed lectus, Cursus sit amet dictum sit amet, Egestas
      diam in arcu cursus euismod quis viverra. Eget gravida cum sociis natuque
      penatibus et magnis. <br><br> Molestie ac feugiat sed lectus.cursus sit amet
      dictum sit amet. Egestas diam in arcu </p>
    <a href="#menu" class="btn">Book a Table</a>

  </div>
</section>


<!-- menu section -->
<section class="menu" id="menu">
  <div class="main text">
    <h2>Most Popular Dishes</h2>
    <P>Consectetur numquam poro nemo veniam <br> eligendi rem adipisci qou modi</P>
  </div>

  <div class="menu-content">
    <?php foreach ($kuliner as $food) : ?>
      <div class="row">
        <img src="img/<?= $food['gambar'] ?>">
        <div class="menu-text">
          <div class="menu-left">
            <h4><?= $food['nama_makanan'] ?></h4>
          </div>
          <div class="menu-right">
            <h4>Rp.35k</h4>
          </div>
        </div>
        <p><?= $food['deskripsi_makanan'] ?></p>
        <div class="star">
          <a href="#"><i class='bx bxs-star'></i></a>
          <a href="#"><i class='bx bxs-star'></i></a>
          <a href="#"><i class='bx bxs-star'></i></a>
          <a href="#"><i class='bx bxs-star'></i></a>
          <a href="#"><i class='bx bxs-star'></i></a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>






<!-- contact section -->
<section class="contact" id="contact">
  <div class="main-contact">
    <div class="contact-content">
      <h4>Services</h4>
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#menu">Menu</a></li>
      <li><a href="#contact">Contact</a></li>
    </div>

    <div class="contact-content">
      <h4>Partner</h4>
      <li><a href="#home">Food </a></li>
      <li><a href="#about">Foodie</a></li>
      <li><a href="#menu">Food Fun</a></li>
      <li><a href="#contact">Fresh Food</a></li>
    </div>

    <div class="contact-content">
      <h4>Contact</h4>
      <li><a href="083107411410">Contact Us</a></li>
      <li><a href="#">Press Center</a></li>
      <li><a href="#">Carrers</a></li>
      <li><a href="#">Faq</a></li>
    </div>

    <div class="contact-content">
      <h4>Follow Us</h4>
      <li><a href="https://instagram.com/__mustikaaa?igshid=MzRlODBiNWFlZA==">Instagram</a></li>
      <li><a href="#">Facebok</a></li>
      <li><a href="https://www.tiktok.com/@hidesember____?_t=8cpNVEdxq0g&_r=1">TikTok</a></li>
    </div>

  </div>
</section>

<div class="last-text">
  <p>© 2021 FoodFun. All Rights Reserved by Mustika</p>
</div>

<!-- scroll top -->
<a href="#home" class="scroll-top">
  <i class='bx bx-up-arrow-alt'></i>
</a>




<!-- custom js link -->
<script type="text/javascript" src="js/javascript"></script>




</head>

</body>