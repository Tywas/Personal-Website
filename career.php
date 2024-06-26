<?php $thisPage="career"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Career</title>
    <!-- Favicon links -->
    <link rel="apple-touch-icon" sizes="180x180" href="/Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Favicon/favicon-16x16.png">
    <link rel="manifest" href="/Favicon/site.webmanifest">
    <link rel="stylesheet" href="/Styles/personalwebsite_styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            margin-top: 6vw;
            padding: 0;
        }
        
        .container {
            margin: 10vw;
            margin-top: 5vw;
            padding: 5vw;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .work-experience {
            margin-bottom: 40px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
        }
        
        .work-experience img {
            width: 100%;
            max-height: 20vw;
            overflow: hidden;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .work-experience h2 {
            margin-top: 0;
            margin-bottom: 5px;
            font-size: 20px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .work-experience p {
            margin-bottom: 0;
            color: #333;
            line-height: 1.5;
        }
        
        .work-experience:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h5 {
            text-align: center;
            margin-top: 5px;
            margin-bottom: 12px;
        }

        .work-experience p {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                transition: transform 0.3s ease;
        }
        .work-experience p:not(:first-of-type) {
            display: none;
        }

        .work-experience.clicked p {
            filter: none;
            display: block;
            backdrop-filter: none;
            -webkit-text-fill-color: initial;
            transition: transform 0.3s ease, opacity 0.3s ease, display 0.3s ease;; 
        }
        .about-me {
                margin-bottom: 40px;
                border: 1px solid #ccc;
                padding: 20px;
                border-radius: 5px;
                background-color: #fff;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                margin-left: auto;
                margin-right: auto;
        }
        .about-me p {
                margin-bottom: 10px;
                color: #333;
                line-height: 1.5;
                margin-left: 5vw;
                margin-right: 5vw;
        }
        .text-link {
            /* text-decoration: none; */
            color: #000;
        }
        
    </style>
</head>
<body>
    <? include "Code/header.php"; ?>
    <div class="container">
        <div class="about-me">
            <h1>About Me</h1>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Below you will find my career journey. It all boils down to my passion for developing quality and 
                maximizing learning potential within the companies I work with. In my career journey, I embrace a challenge where every 
                obstacle serves as an avenue to explore, gain valuable insights, and elevate my skills. My mindset of curiosity and growth 
                has led me to develop a variety of tools that have helped me tackle any challenge I face.
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;I take initiative and leverage my skills as an engineer and programmer to make my visions become reality. 
            My contributions have resulted in:</p>
        
            <p>1.&nbsp;&nbsp;&nbsp;&nbsp;Engineered a tool for measuring the <a href="..\Pages\MTF_documentation.php" class='text-link'>Modulation Transfer Function (MTF)</a> of both simulated and real-world images resulting in accurate calculations compared to Imatest calculations.</p>

            <p>2.&nbsp;&nbsp;&nbsp;&nbsp;Creation of a precision  <a href="..\Pages\Color-checker.php" class='text-link'>color measurement tool</a>, utilizing the CIELAB color space, to ensure accurate and refined color assessment.</p>

            <p>3.&nbsp;&nbsp;&nbsp;&nbsp;Designed C++ modules employing object-oriented programming for motor speed-based controller vehicle systems ensuring international safety standards through <a href="..\Pages\Curtis_projects.php" class='text-link'>PDO communication verification</a>.</p>

            <p>Please email me at  
            <a href="mailto:tylervictorbowes@gmail.com" class='text-link'>tylervictorbowes@gmail.com</a>
            with any inquiries you may have.</p>
        </div>
        <!-- listens for when work-experience element is clicked -->
        <script>    
            document.addEventListener('DOMContentLoaded', function() {
                var workExperiences = document.querySelectorAll('.work-experience');

                workExperiences.forEach(function(workExperience) {
                    workExperience.addEventListener('click', function() {
                        this.classList.toggle('clicked');
                    });
                });
            });
        </script>

        <div class="work-experience">
            <img src="Images/onsemi logo.png" alt="Work Experience 1">
            <h2>Onsemi</h2>
            <h5>Pixel Optics Intern</h5>
            <h5>Timeline: May 2023 - December 2023</h5>
            <p>• Utilized metric that determines the contrast and sharpness of an image (MTF/SFR) to 
                collect MTF data from captured and simulated images.</p>
            <p>• Developed methodology and <a href="..\Pages\MTF_documentation.php" class='text-link'>tool to automate the extraction of MTF/SFR</a> data for image sensor pixel arrays 
                from captured images based on the International Organization for Standardization (ISO) 12233:2023 document
                that shows good match to professional organization's, Imatest, extracted MTF data of the same image.</p>
            <p>• Thoroughly documented Python scripts along with a descriptive user manual providing Onsemi with further 
                insight of the methodology used to obtain MTF/SFR from applying ISO 12233.</p>
            <p>• Developed  <a href="..\Pages\Color-checker.php" class='text-link'>color analysis</a> scripts to interchangeably transfer RGB color description data into the standardized CIELAB and 
                CIEXYZ color spaces to evaluate and verify color consistency</p>
        </div>
        <div class="work-experience">
            <img src="Images/curtis instrument logo.jpg" alt="Work Experience 2">
            <h2>Curtis Instruments, Inc.</h2>
            <h5>Application Engineer Intern</h5>
            <h5>Timeline: May 2022 - August 2022</h5>
            <p>• Developed C++ modules for motor speed-based controller vehicle systems using object-oriented programming.</p>
            <p>• Created software utilizing <a href="..\Pages\Curtis_projects.php" class='text-link'>PDO communication</a> between CAN buses that verifies consistent and accurate 
                transmissions within 100ms to meet new safety requirements for the international market.</p>
            <p>• Developed forklift class to organize methods that perform specified mechanisms, utilizing the <a href="..\Pages\Curtis_projects.php" class='text-link'>grouping 
                solenoids</a>.
            <p>• Designed flowcharts and produced unit tests for each program.</p>
        <!-- Add more work experiences here -->
        </div>
        <div class="work-experience">
            <img src="Images\Boise State Logo.png" alt="School Experience">
            <h2>Boise State University</h2>
            <h5>Bachelor Computer Science Student</h5>
            <h5>Timeline: September 2020 - May 2024</h5>
            <p>• Bachelor of Computer Science graduate (in May 2024) with expertise in key programming languages (Python, Java, and C), algorithms, and software development methodologies and workflows.</p>
            <p>• In-depth understanding and application of Database implementation, Object-Oriented Design Patterns, and Natural Language Processing.</p>
            <p>• Demonstrated ability to design and implement website using PHP, CSS, and javascript.</p>
        </div>
    </div>
</body>
</html>
