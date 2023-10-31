<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tea Time</title>
    <link rel="icon" href="pics/time.png">
    
    <!-- Font Awesome -->
    <script
    src="https://kit.fontawesome.com/86098cddac.js"
    crossorigin="anonymous"></script>

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="intro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- External JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
     <!-- Header Section -->
     <header>
        <a href="intro.html">
            <img src="pics/time.png" id="logo" alt="logo" width="300" height="300">
        </a>
        <div class="container">
            <button class="loginbutton">
                <span>
                    <b><a href="signup.html" class="login-link">Log out</a></b>
                </span>
            </button>
        </div>
        <nav>
            <ul class="nav">
                <li><b><a href="intro.html">Home</a></b></li>
                <li><b><a href="contact.html">Contact</a></b></li>
                <li><b><a href="teapages/blacktea.html">Tea</a></b></li>
                <li><b><a href="quiz.html">Quiz</a></b></li>
            </ul>
        </nav>
    </header>
    <hr>
    <!-- Vertical Line -->
    <div class="vertical-line"></div>

    <section class="about-us">
      <div class="about-us-content">
        <i class="fa-solid fa-mug-saucer" style="font-size: 50px;"></i>
        <h2 class="title">Our Story</h2>
        <p>Welcome to Tea Time, where our passion for tea meets your love for exquisite flavors and aromas. Our journey began with a simple cup of tea and a desire to share the wonders of this ancient and diverse beverage with the world.</p>
      </div>
      <br>
      <div class="about-us-content">
        <i class="fa-solid fa-bullseye" style="font-size: 50px;"></i>
        <h2 class="title">Our Mission</h2>
        <p>At Tea Time, we are on a mission to bring you the finest teas from around the globe. We believe that tea is more than just a drink; it's a cultural experience, a moment of tranquility, and a source of inspiration.</p>
      </div>
      <br>
      <div class="about-us-content">
        <i class="fa-solid fa-house" style="font-size: 50px;"></i>
        <h2 class="title">Our Values</h2>
        <ul>
          <li>Quality: We are committed to sourcing and curating the highest quality teas for our customers.</li>
          <li>Community: We value the connections formed over a cup of tea and strive to build a vibrant tea-loving community.</li>
          <li>Sustainability: We are dedicated to promoting sustainable and ethical tea production practices.</li>
          <li>Education: We aim to educate and inspire tea enthusiasts, fostering a deeper appreciation for this timeless beverage.</li>
        </ul>
      </div>
    </section>
    
  
        <hr>
    <!-- Carousel Section -->
    <section id="slide">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <a href="teapages/blacktea.html"><img class="carousel-pic" src="pics/black_tea.png"></a>
                </div>
                <div class="carousel-item">
                  <a href="teapages/oolongtea.html"><img class="carousel-pic" src="pics/olong_tea.png"></a>
                </div>
                <div class="carousel-item">
                  <a href="teapages/greentea.html"><img class="carousel-pic" src="pics/green_tea.png"></a>
                </div>
                <div class="carousel-item">
                  <a href="teapages/hibiscustea.html"><img class="carousel-pic" src="pics/hibicus_tea.png"></a>
                </div>
                <div class="carousel-item">
                  <a href="teapages/whitetea.html"><img class="carousel-pic" src="pics/white_tea.png"></a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Footer Section -->

    <br>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    
</body>
<footer>
  <div class="row2">
      <br>
      <br>
      <hr>
      <div class="column2">
          <img src="pics/time.png" width="60" height="60" alt="smalllogo">
          <strong>&#169;2023 Tea Time</strong>
      </div>
      <div class="column2">
          <h2>Subscribe</h2>
          <p>Sign up to be notified of specials and discounts</p>
          <input type="text" name="email" size="40" placeholder="Your Email">
          <input type="submit" name="submit" value="Sign Up"><br>
          <a href="https://www.instagram.com/arizonastateuniversity/"><img src="pics/bwinsta.png" width="40" alt="insta"></a>
          <a href="https://www.facebook.com/arizonastateuniversity/"><img src="pics/bwfacebook.png" width="40" alt="face"></a>
      </div>
  </div>
</footer>
</html>
    
    
    
    
    
    
    
    
    
    
    