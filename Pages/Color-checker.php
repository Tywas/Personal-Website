<!DOCTYPE html>
<html>
<head>
    <title>Color Checker Tool</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Favicon/favicon-16x16.png">
    <link rel="manifest" href="/Favicon/site.webmanifest">
    <link rel="stylesheet" href="/Styles/personalwebsite_styles.css">
    <style>
        .container {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .title {
            color: #333;
            font-size: 24px;
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

    </style>
</head>
<body>
    <? include "../Code/header.php"; ?>
    <div class="container">
        <h1 class="title">Color Analysis Tool</h1>
        <p class="description"><br>
            <h3 class="headers">Summary:</h3><br>
            This page serves as documentation for the Color Checker Tool, outlining the underlying principles and methodologies 
            drawn from open documentation. It does not include specific code. The primary focus is on explaining the tool's 
            functionalities, especially its role in color measurement, making it a valuable reference for understanding its 
            basics and showcasing its application in my projects.
        </p>
        <p class="description">
            <br><h3 class="headers">Executive Summary:</h3> <br>
            1.) <br>
            2.) <br>
            3.) <br><br>
        </p><p><!-- You've found a hidden easter egg, contact me to let me know!! --></p>
        <div class="image-container">
            <label class="figure-label" id="image-1">
                <img src="..\Images\CIELAB-color-space-diagram.png" alt="Image 1">
                <p class="figure_description">Figure 1: CIELAB color space diagram</p>
            </label>
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp;This Color Analysis Tool, it serves as a metric for evaluating and quantifying the color accuracy and 
                    characteristics within an image. By providing insights into color fidelity, saturation, and overall image quality, this tool becomes 
                    indispensable for precise color analysis and enhancement in various visual applications. To analyze color we need to compare two colors, 
                    one being the reference and the other being the test/target. 
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;I designed the tool to use the CIE color spaces, which is the most standard way of measuring color. 
                    Specifically, CIELAB color space is used. To analyze the tool we compare the distance between the two points (the two colors 
                    in the CIELAB color space) which is represented as Delta-E (ΔE).  The smaller the distance, the closer the color is to being the true
                    color based on the reference color being used.  Various facorts can affect ΔE, for example, the Color Filter Array (CFA) for a sensors 
                    used for a camera use might have more green channels than a sensors used for cars, so the green colors might be a little more accurate
                    than latter. 
                </p>
            </div>
        </div>
        <!-- <div class="image-container"> -->
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp; 
                </p>
            <!-- </div> -->
            <!-- <img src="..\Images\MTF example photo.png" alt="Image 2"> -->
        </div>
        <div class="image-container">
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </p>
            </div>
            <label class="figure-label" id="image-2">
                <img src="..\Images\vertical knife edge.png" class="Image-2">
                <p class="figure_description">Figure 2: Knife edge</p>
            </label>
            <label class="figure-label" id="image-2">
                <img src="..\Images\vertical edge response.png" class="Image-2">
                <p class="figure_description">Figure 3: Knife edge response</p>
            </label>
        </div>
        <div class="image-container">
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </p>
            </div>
            <label class="figure-label">
                <img src="..\Images\Slanted edge response.png" alt="Image 2">
                <p class="figure_description">Figure 4: Slanted edge response</p>
            </label>
        </div>
    </div>
</body>
</html>
