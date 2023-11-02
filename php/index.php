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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steep Success</title>
    <link rel="stylesheet" href="../css/roadmap.css">
</head>
<body>
<Br><div><a href='../html/to_do_menteeexcel.html'>link</div>
    <header>
        <h1>Technical Advancement - Excel</h1>
    </header>
    <div class="timeline">
        <div class="container left-container">
            <img src="../images/number-1.png">
            <div class="text-box">
                <h2>Excel Orientation</h2>
                <small>2 Weeks</small>
                <hr>
                Mentor
                <ul>
                    <li>Schedule an initial Excel orientation session.</li>
                    <li>Provide an overview of Excel's importance.</li>
                    <li>Help mentees set specific Excel learning goals.</li>
                </ul>
                Mentee
                <ul>
                    <li>Familiarize themselves with Excel's interface.</li>
                    <li>Identify areas of Excel they wish to master.</li>
                    <li>Set preliminary learning objectives.</li>
                </ul>
                <span class="left-container-arrow"></span>
            </div>
        </div>

        <div class="container right-container">
            <img src="../images/number-2.png">
            <div class="text-box">
                <h2>Basic Functions</h2>
                <small>1 Month</small>
                <hr>
                Mentor
                <ul>
                    <li>Introduce basic Excel functions like SUM, AVERAGE, and COUNT.</li>
                    <li>Explain data entry and formatting best practices.</li>
                    <li>Review mentees' progress and address questions.</li>
                </ul>
                Mentee
                <ul>
                    <li>Practice basic functions on sample data.</li>
                    <li>Apply formatting to create clear and organized spreadsheets.</li>
                    <li>Share experiences and challenges.</li>
                </ul>
                <span class="right-container-arrow"></span>
            </div>
        </div>

        <div class="container left-container">
            <img src="../images/number-3.png">
            <div class="text-box">
                <h2>Data Analysis</h2>
                <small>2 Months</small>
                <hr>
                Mentor
                <ul>
                    <li>Teach data analysis techniques using Excel.</li>
                    <li>Explore functions like VLOOKUP, HLOOKUP, and IF statements.</li>
                    <li>Review case studies or practical examples.</li>
                </ul>
                Mentee
                <ul>
                    <li>Analyze real or simulated data using Excel.</li>
                    <li>Start using VLOOKUP, HLOOKUP, and IF functions.</li>
                    <li>Discuss their analysis and findings with mentors.</li>
                </ul>
                <span class="left-container-arrow"></span>
            </div>
        </div>

        <div class="container right-container">
            <img src="../images/number-4.png">
            <div class="text-box">
                <h2>Advanced Functions</h2>
                <small>3 Months</small>
                <hr>
                Mentor
                <ul>
                    <li>Introduce advanced functions, such as INDEX, MATCH, and PivotTables.</li>
                    <li>Demonstrate data validation and conditional formatting.</li>
                    <li>Help mentees apply these functions to real work scenarios.</li>
                </ul>
                Mentee
                <ul>
                    <li>Practice advanced functions on more complex data.</li>
                    <li>Create PivotTables and apply data validation.</li>
                    <li>Share reports and insights derived from these functions.</li>
                </ul>
                <span class="right-container-arrow"></span>
            </div>
        </div>

        <div class="container left-container">
            <img src="../images/number-5.png">
            <div class="text-box">
                <h2>Automation and Efficiency</h2>
                <small>4 Months</small>
                <hr>
                Mentor
                <ul>
                    <li>Guide mentees on Excel automation using Macros and VBA.</li>
                    <li>Show how to develop templates and automate repetitive tasks.</li>
                    <li>Encourage the use of keyboard shortcuts for efficiency.</li>
                </ul>
                Mentee
                <ul>
                    <li>Create simple Excel Macros to automate tasks.</li>
                    <li>Develop templates for common work scenarios.</li>
                    <li>Implement keyboard shortcuts in their daily Excel use.</li>
                </ul>
                <span class="left-container-arrow"></span>
            </div>
        </div>

        <div class="container right-container">
            <img src="../images/number-6.png">
            <div class="text-box">
                <h2>Mastery and Application</h2>
                <small>6 Months</small>
                <hr>
                Mentor
                <ul>
                    <li>Promote Excel mastery through complex modeling or analysis.</li>
                    <li>Encourage mentees to teach Excel concepts to others.</li>
                    <li>Assess the overall Excel proficiency achieved.</li>
                </ul>
                Mentee
                <ul>
                    <li>Tackle challenging Excel projects or analyses.</li>
                    <li>Share their knowledge and mentor peers.</li>
                    <li>Conclude the mentorship with a final assessment of their Excel skills.</li>
                </ul>

                <!--Maintain a regular connection, supporting each other's growth.
                Celebrate the journey's success in a closing meeting or event.
                Transition into a collaborative peer and colleague relationship.-->

                <span class="right-container-arrow"></span>
            </div>
        </div>

    </div>
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    