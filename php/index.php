<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steep Success</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="../css/homepage.css">
</head>
<body>
    <header>
        <div class="header_container container">
            <div class="nav">

            <div>Welcome, Dillon</div>
                <a href="#" class="logo">Steep Success</a>
                
                <ul class="menu active">
                    <li>
                        <a href='../html/homepage.html' class="active">Log Out</a>
                    </li>
                    <li>
                        <a href='../html/technicalroadmap_mentee.html'>Technical Road Map</a>
                    </li>
                    <li>
                        <a href='../html/contact.html'>Contact</a>
                    </li>
                    <li>
                        <a href='../html/feedback.html'>Feedback</a>
                    </li>
                    <li>
                        <a href='../html/careerroadmap_mentee.html'>Career Road Map</a>
                    </li>
                    <li>
                        <a href='../html/to_do_menteeexcel.html'>To Do</a>
                    </li>
                </ul>
                
        </div>
        
    </header>
    <main>
        <section class="home" id="home">

            <div class="home_container container">
                <div class="home_content">
                    <div class="content">
                        <h1>We Create <br>Solutions <span> for <br> Your Business</span></h1>
                        <p>"Scaling Heights, One Mentor at a Time."</p>
                        <a href="../php/login.php" class="btn">Get Started</a>
                    </div>
                </div>
                <a href="#about" class="scroll_down">
                    <span>Scroll Down</span>
                    <i class="uil uil-mouse-alt arrow_down"></i>                
                </a>
            </div>
        </section>
        <section class="about" id="about">
            <div class=".about_container container">
                <div class="content">
                    <h2 class="section_title">Our <span> About us</span></h2>
                    <br>
                    <p>Welcome to Steep Success, the nexus of ambition and mentorship. 
                        Founded in 2023, our platform epitomizes the transformative impact of expert guidance on budding aspirations. 
                        At Steep Success, we seamlessly connect mentees with mentors whose visions align, while providing an enriched 
                        library of resources and fostering a space for interactive dialogues. We believe that every success story is 
                        magnified by collective wisdom, and our mission is to make every ascent not just steep, but truly spectacular. 
                        Join us on this enriching journey towards unparalleled growth.</p>
                    <br> 
                    <a href="#" class="btn">Read More</a>
                </div>
                <div class="imgBox"></div>
                <img src="../images/homepage2.jpg" alt="" class="img-fluid">
            </div>
            
        </section>
    </main></body>
</html>
    
    
    
    
    
    
    
    
    
    
    