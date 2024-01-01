<!DOCTYPE html>
<html>
<head>
    <title>PDO communication</title>
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
        <h1 class="title">PDO Communication</h1>
        <p class="description"><br>
            <h3 class="headers">Summary:</h3><br>
            
        </p>
        <p class="description">
            <br><h3 class="headers">Executive Summary:</h3> <br>
            1.)  <br>
            2.)  <br>
            3.)  <br><br>
        </p><p><!-- You've found a hidden easter egg, contact me to let me know!! --></p>
        <div class="image-container">
            <label class="figure-label" id="image-1">
                <img src="..\Images\MTF example photo.png" alt="Image 1">
                <p class="figure_description">Figure 1: Example of Intensity Response and MTF</p>
            </label>
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
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
