<?php $thisPage="Color_Analysis"; ?>
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
            font-size: 30px;
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
            1.) Developed tool to transition from RGB to CIEXYZ to CIELAB for most accurate analysis of color<br>
            2.) In depth understanding of CIE color spaces to accurately explain the use of each color space and its functions<br><br>
        </p><p><!-- You've found a hidden easter egg, contact me to let me know!! --></p>
        <div class="image-container">
            <label class="figure-label" id="image-2">
                <img src="..\Images\macbeth_colorcheck_chart.jpg" class="Image-1">
                <p class="figure_description">Figure 1: Macbeth Color Chart</p>
            </label>
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp;Color Analysis is a tool used to measure the color accuracy of color.  For the creation 
                    of this tool, I used CIE color spaces to serve as a metric for evaluating and quantifying the color accuracy and 
                    characteristics within an image. The importance of this took provides insights into color fidelity, saturation, and overall 
                    image quality. In Figure 1, a Macbeth color chart is show and the most standard way to capture color data to analyze color.
                    You would need a reference image, which are the colors you are trying to match, and a test/target image. So, if the Macbeth Chart
                    is used we could analyze 24 colors.
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;The Color analysis tool specifically measures color fidelity utilized CIELAB color space, which is the most standard 
                    way of measuring color. To analyze color, we compare the distance between two points (two colors) in 
                    the CIELAB color space, which is represented as Delta-E (ΔE). The shorter the distance, the closer the color is to being its true
                    color based on the reference color being used.  Various factors can affect ΔE, for example, the Color Filter Array (CFA) sensors 
                    used for a camera use might have more green channels than CFA sensors used for cars, so the green colors might produce a lower ΔE
                    for the latter. 
                </p>
            </div>
        </div>
        <!-- <div class="image-container"> -->
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp; The CIELAB color space is a standardized color model designed to be perceptually uniform, 
                    meaning that the perceptual difference between colors is consistent across the entire color space. The workflow of 
                    converting from RGB values to CIELAB involves two crucial intermediate steps: first from RGB values to CIEXYZ and then to CIELAB.
                </p>
            <!-- </div> -->
            <!-- <img src="..\Images\MTF example photo.png" alt="Image 2"> -->
        </div>
        <div class="image-container">
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp; RGB represents colors as combinations of red, green, and blue channels, but these values 
                    are device-dependent and do not accurately represent human perception. So, CIEXYZ is an intermediate color space 
                    designed to be device-independent, representing colors in a way that aligns with human vision. Figure 3 represents 
                    the CIEXYZ color space wavelengths the human eye can see, making up a vast number of different colors. Even though this color space
                    does a good job at representing color, it would be more accurate to transfer this into the CIELAB space. 
                </p>
            </div>  
            <label class="figure-label" id="image-2">
                <img src="..\Images\CIE_XYZ_wavelengths.png" class="Image-2">
                <p class="figure_description">Figure 2: CIEXYZ color space visual wavelength</p>
            </label>
        </div> 
        <div class="image-container">
            <label class="figure-label" id="image-1">
                <img src="..\Images\CIELAB-color-space-diagram.png" alt="Image 1">
                <p class="figure_description">Figure 3: CIELAB color space diagram</p>
            </label>
            <div class="text">
                <p class="description">
                    The CIELAB color space is a more accurate representation of color because it is designed to be perceptually uniform, and it being in a 3D space
                    allows for more accurate color representation. Figure 3 represents the CIELAB color space. Notice this space is a 3-dimentional plane containing 
                    four colors instead of 3 like the XYZ color space. the colors and axis are represented as follows: Red and Green (represented by A*), Blue and 
                    Yellow (represented by B*), and L* representing lightness (white and black) of a color.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
