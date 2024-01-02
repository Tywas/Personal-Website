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
        }

        .description {
            /* color: #666; */
            font-size: 16px;
            line-height: 1.5;
            margin-right: 20px;
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

        .image-container .text {
            flex: 1;
            /* margin-left: 20px; */
        }

        .image-container:nth-child(even) .text {
            margin-left: 0;
            margin-right: 10px;
        }

        #image-1{
            display: block;
            text-align: center;
            margin-right: 10px;
            margin-bottom: 10px;
            width: 40%;
        }

        .figure-label #image-2{
            display: block;
            text-align: center;
            margin-bottom: 10px;
            width: 40%;
        }

        .figure_description {
            font-size: 12px;
            text-align: center;
            margin-top: 5px;
            color: blue;
        }

        .digital_portfolio_link:hover {
            transform: scale(1.1);
        }   

    </style>
</head>
<body>
    <? include "Code/header.php"; ?>

    <h1 class="title">My Digital Portfolio</h1>

    <section>
        <h2>Section 1</h2>
        <a href="Pages\MTF_documentation.php" class="digital_portfolio_link">
            <img src="Images\MTF example photo.png" alt="Section 1 Image" id="image-2">
            <p>This is the first section of my portfolio.</p>
            MTF Tool
        </a>
    </section>

    <section>
        <h2>Section 2</h2>
        <a href="Pages\Color-checker.php" class="digital_portfolio_link">
            <img src="Images\macbeth_colorcheck_chart.jpg" alt="Section 2 Image" id="image-2">
            <p>This is the second section of my portfolio.</p>
            Color Fidelity Tool
        </a>
    </section>

    <section>
        <h2>Section 3</h2>
        <a href="Pages\Curtis_projects.php" class="digital_portfolio_link">
            <img src="Images\Swingreach forklift.jpg" alt="Section 3 Image" id="image-2">
            <p>This is the third section of my portfolio.</p>
            PDO and Solenoids
        </a>
    </section>
</body>
</html>
