<?php $thisPage="digitial-portfolio"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Digital Portfolio</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Favicon/favicon-16x16.png">
    <link rel="manifest" href="/Favicon/site.webmanifest">
    <link rel="stylesheet" href="/Styles/personalwebsite_styles.css">
<style>
    .title {
        color: #333;
        font-size: 2em;
        text-align: center;
    }

    .headers {
        font-size: 20px;
        font-weight: bold;
        margin: 0px;
        margin-bottom: 3px;
        text-align: center;
    }

    .description {
        /* color: #666; */
        font-size: 16px;
        line-height: 1.5;
        margin-right: 20px;
        text-decoration: none;
    }

    .image-container {
        display: flex;
        align-items: center;
        margin: 10px 0;
    }

    .image-container img {
        max-width: 100%;
        height: auto;
    }

    section {
        width: 35%;
        height: auto;
        margin: 0 3%;
        display: inline-block;
        vertical-align: top;
        background-color: #f0f0f0; 
        padding: 20px; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;  
    }
    
    section:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;  
    }   

    .progect_images{
        width: 100%;
        height: auto;
        text-align: center;
    }

    .breif-description {
        margin-left: 20%;
        margin-right: 20%;
        margin-bottom: 5%;
    }

    </style>
</head>
<body>
    <? include "Code/header.php"; ?>

    <h1 class="title">Digital Portfolio</h1>
    <p class="breif-description">&nbsp;&nbsp;&nbsp;&nbsp;This Digital Portfolio is meant to dive deeper into projects I've worked on.  This enables me to give a better
        explaination of what was done and what/how it is applyed, more so than what is documented inside my 
        <a href="PDFs\Tyler Bowes Resume 2024.pdf" target=”_blank”>RESUME</a>.  Enjoy!
    </p>

    <section>
        <h2 class="headers">MTF Tool</h2>
        <a href="Pages\MTF_documentation.php" class="digital_portfolio_link">
            <img src="Images\MTF example photo.png" alt="Section 1 Image" class="progect_images">
            <!-- <p class="discription">MTF Tool</p> -->
        </a>
    </section>

    <section>
        <h2 class="headers">Color Fidelity Tool</h2>
        <a href="Pages\Color-checker.php" class="digital_portfolio_link">
            <img src="Images\macbeth_colorcheck_chart.jpg" alt="Section 2 Image" class="progect_images">
            <!-- <p class="discription">Color Fidelity Tool</p> -->
        </a>
    </section>

    <section>
        <h2 class="headers">PDO and Solenoids</h2>
        <a href="Pages\Curtis_projects.php" class="digital_portfolio_link">
            <img src="Images\Swingreach forklift.jpg" alt="Section 3 Image" class="progect_images">
            <!-- <p class="discription">PDO and Solenoids</p> -->
        </a>
    </section>
</body>
</html>
