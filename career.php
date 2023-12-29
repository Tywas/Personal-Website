<?php $thisPage="career"; ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="personalwebsite_styles7.css">

    <title>Career</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            margin-top: 6vw;
            padding: 0;
        }
        
        .container {
            max-width: 800px;
            margin: 10vw;
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
            color: #666;
            line-height: 1.5;
        }
        
        .work-experience:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .work-experience:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .work-experience:nth-child(odd) {
            background-color: #fff;
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
                width: 70%;
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
    </style>
</head>
<body>
    <? include "/Code/header.php"; ?>
    <div class="container">
        <div class="about-me">
            <h1>About Me</h1>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Below you will find my career journey. It all boils down to my passion for developing quality and maximizing 
            learning potential within the companies I work with. I believe that my career journey is a never-ending 
            opportunity giving endevor and I approach with blend of curiosity and dedication, where every challenge 
            is a chance to delve into new realms, absorb insights, and refine/develope my skills.
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;I take initiative and leverage my skills as an engineer and programmer to make my visions become reality. 
            My contributions have resulted in:</p>
        
            <p>1.&nbsp;&nbsp;&nbsp;&nbsp;Engineered a tool for measuring the<a href="\PersonalWebsite\Pages\MTF_documentation.php">Modulation Transfer Function (MTF)</a> of both simulated and real-world images resulting in accurate calculations compared to Imatest calculations.</p>

            <p>2.&nbsp;&nbsp;&nbsp;&nbsp;Creation of a precision color measurement tool, utilizing the CIELAB color space, to ensure accurate and refined color assessment.</p>

            <p>3.&nbsp;&nbsp;&nbsp;&nbsp;Designed C++ modules employing object-oriented programming for motor speed-based controller vehicle systems ensuring international safety standards through PDO communication verification.</p>

            <p>Please email me at  
            <a href="mailto:tylervictorbowes@gmail.com">tylervictorbowes@gmail.com</a>
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
            <img src="Images/Portrate (linkedin).jpg" alt="Work Experience 1">
            <h2>Onsemi</h2>
            <h5>Pixel Optics Intern</h5>
            <h5>Timeline: May 2023 - December 2023</h5>
            <p>• Utilized metric that determines the contrast and sharpness of an image (MTF/SFR) to 
                collect MTF data from captured and simulated images.</p>
            <p>• Developed methodology and tool to automate the extraction of MTF/SFR data for image sensor pixel arrays 
                from captured images based on the International Organization for Standardization (ISO) 12233:2023 document
                that shows good match to professional organization’s, Imatest, extracted MTF data of the same image.</p>
            <p>• Thoroughly documented Python scripts along with a descriptive user manual providing Onsemi with further 
                insight of the methodology used to obtain MTF/SFR from applying ISO 12233.</p>
            <p>• Developed scripts to interchangeably transfer RGB color description data into the standardized CIELAB and 
                CIEXYZ color spaces to evaluate and verify color consistency</p>
        </div>
        <div class="work-experience">
            <img src="Images/Portrate (linkedin).jpg" alt="Work Experience 2">
            <h2>Curtis Instruments, Inc.</h2>
            <h5>Application Engineer Intern</h5>
            <h5>Timeline: May 2023 - December 2023</h5>
            <p>• Developed C++ modules for motor speed-based controller vehicle systems using object-oriented programming.</p>
            <p>• Created software utilizing PDO communication between CAN buses that verifies consistent and accurate 
                transmissions within 100ms to meet new safety requirements for the international market.</p>
            <p>• Developed forklift class to organize methods that perform specified mechanisms, utilizing the grouping 
                solenoids.
            <p>• Designed flowcharts and produced unit tests for each program.</p>
        </div>
        <!-- Add more work experiences here -->
    </div>
</body>
</html>
