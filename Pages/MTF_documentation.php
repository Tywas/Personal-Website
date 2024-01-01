<?php $thisPage="MTF_tool"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>MTF Documentation</title>
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
        <h1 class="title">Modulation Transfer Function (MTF)</h1>
        <p class="description"><br>
            <h3 class="headers">Summary:</h3><br>
            This page is a documentation of the Modulation Transfer Function (MTF) and some of the surface level methodology I have taken from open documentation.  There is no code provided in this document.  
            The majority of this document is an explanation of MTF and how it is calculated.  This document is meant to be a reference for myself and others to understand the basics of MTF while also showcasing how 
            I this information in my work.
        </p>
        <p class="description">
            <br><h3 class="headers">Executive Summary:</h3> <br>
            1.) MTF is a metric used to measure the sharpness and contrast of an image. <br>
            2.) Methods taken From ISO 12233 Document to obtain MTF. (Edge Spread Function, Line Spread Function, Modulation Transfer Function)<br>
            3.) Utilizing slanted knife edge to take advantage of sampling beyond the diffraction limit. <br><br>
        </p><p><!-- You've found a hidden easter egg, contact me to let me know!! --></p>
        <div class="image-container">
            <label class="figure-label" id="image-1">
                <img src="..\Images\MTF example photo.png" alt="Image 1">
                <p class="figure_description">Figure 1: Example of Intensity Response and MTF</p>
            </label>
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp;As a brief introduction to the <b>Modulation Transfer Function (MTF)</b>, this function is a metric used to measure the sharpness and contrast of an image.
                    Sharpness and contrast have a direct relationship with the resolution of an image. The higher the MTF, the sharper and more contrasted the image will be, hence a better resolution, and the same goes with a higher resolution.
                    The MTF is a function of the spatial frequency of the image. The spatial frequency is the number of cycles per unit distance. In the case of the MTF, the unit distance is the distance between pixels.
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;To get more technical, there are many factors that affect the MTF of an image. The most important factors are the lens and the sensor (there are many more factors that contribute to MTF as a whole).
                    For a short understanding on how MTF is calculated we can use the following image to the left. In the image to the left we have black and white bars with different levels of blurring (contrast/sharpness).
                    So, at the bottom of the image, graphed in blue is the edge response.  This measures the intensity of the light white would be max intensity 255 for <b>RGB Color Filter Array (CFA)</b> and black would be 0 intensity (in perfect conditions).
                    We have to take in consideration the distance between pixels in the array from white to black.  We use these values to calculate the MTF.  We calculate the derivative of an edge to get the <b>Line Spread Function (LSF)</b> which 
                    then we take the <b>Fourier Transform</b> of the LSF to get the MTF.  The MTF is a function of the spatial frequency of the image. The spatial frequency is the number of cycles per unit distance. In the case of the MTF, the unit distance is the distance between pixels.
                </p>
            </div>
        </div>
        <!-- <div class="image-container"> -->
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp;During my time at onsemi I created a methodology describing MTF, while also developing the tool to extract MTF data.  As a backbone to my process and methodology
                    I used the <b>International Organization for Standardization (ISO) 12233:2017</b> document, but during the middle of my time at Onsemi, <b>ISO 12233:2023 was released</b>.  So, I was able to base my logic behind my methodology on both 12233 documents (2017 and 2023).
                    These documents are a standard that describes the method for measuring the resolution and MTF of electronic still imaging cameras.  This standard is used by many companies to measure the MTF of their cameras.
                    The whole point of this is to have a standard that can be used to compare the MTF of different cameras.  This is important because it allows for a standard to be used to compare any MTF factor inside a camera (lens, knife-edge, camera, etc.) and to see which MTF in comparison is better.
                </p>
            <!-- </div> -->
            <!-- <img src="..\Images\MTF example photo.png" alt="Image 2"> -->
        </div>
        <div class="image-container">
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp;Some take aways from the ISO 12233 document to capture an edge is using a <b>slanted knife edge</b>. By using a slanted knife edge, we can oversample an edge beyond the diffraction limit.  
                    If we did not do this and we had a vertical knife edge, our discrete intensity representation of the edge would be a poor response of the true edge (the edge would be sampled at the same rate as the pixels).
                    So, by using this slanted edge we can sample the edge at a higher rate than the pixel pitch.  This is important because this oversampled edge not only would create a better MTF but a more accurate representation of the edge itself.
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
                    &nbsp;&nbsp;&nbsp;&nbsp;To visualize this, the image to the left is a vertical knife edge.  The image to the right is the edge response of the vertical knife edge.  As you can see the edge response is not a good representation of the edge itself.
                    If we were to take a slanted knife edge response it would look something like the image to the right.  And we can see that in this example there is one extra datapoint in the edge response which is how oversample would look like.  This
                    is explained very well in the <a href="https://mtfmapper.blogspot.com/2019/08/aliasing-and-slanted-edge-method-what.html" target=”_blank”>MTF Mapper blog</a>.
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
