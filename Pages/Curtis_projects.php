<?php $thisPage="PDO_and_Solenoid"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Curtis Projects</title>
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
        <h1 class="title">PDO Communication</h1>
        <p class="description"><br>
            <h3 class="headers">Summary:</h3><br>
            During my time at Curtis Instruments, I was able to work on the Swing Reach Forklift, which was just 
            picking back up momentum after covid. I was able to work on the PDO communication between the CAN 
            buses, and solenoid functionalities. This was my first internship experience and there were a lot of 
            mistakes made during the programming process, but a lot of success came from this as well. I describe 
            some of the struggles and how I overcame them along with the technical understanding of what was done.
            
        </p>
        <p class="description">
            <br><h3 class="headers">Executive Summary:</h3> <br>
            &nbsp;&nbsp;&nbsp;&nbsp;1.)  Engineered C++ modules utilizing object-oriented programming to enhance motor speed-based controller vehicle systems<br>
            &nbsp;&nbsp;&nbsp;&nbsp;2.)  Developed software employing Process Data Object (PDO)communication between Controller Area Network (CAN) buses, ensuring reliable transmissions within a 100ms timeframe to meet international safety standards.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;3.)  Created an optimized solenoid  class, streamlining methods for executing specified mechanisms through the strategic use of grouping solenoids<br><br>
        </p><p><!-- You've found a hidden easter egg, contact me to let me know!! --></p>
        <div class="image-container">
            <label class="figure-label" id="image-1">
                <img src="..\Images\Swingreach forklift.jpg" alt="Image 1">
                <p class="figure_description">Figure 1: Swing Reach Forklift</p>
            </label>
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp;There were two main projects I worked on: Creating a solenoid class and ensuring PDO communication.  
                    With the solenoid class, I created functionality to be able to move the forks, in the Swing Reach Forklift, up/down, left/right, and rotate.
                    Creating a single solenoid wasn't a problem, the trickiness came when creating a group of solenoids that are needed to perform.
                    an action.  Two different solenoids couldn't go off at the same time if they were the solenoids are reused for other functions.
                    The route I took was to classify each solenoid and determine whether it was a part of one or more functionalities.  If it was apart 
                    of multiple functionalities, the process would wait until it finished turning off so that the selected process was in a ready state 
                    until it proceeded.   
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;A part of this project, an edge case was brought to my attention that I hadn't thought of.  The edge case was that
                    if the solenoid was in the middle of transitioning to process and the user wanted to stop the process or change the process.  Now stopping the process
                    is the same as changing the process, going into its state where no fork movements are happening.  So, I mention this word in the previous paragraph, but this 
                    is where ready state came.  If the solenoid was in the middle of transitioning, it would finish transition, and if the user wanted to change the process during 
                    its transition, it immediately goes transition to its desired position.  To put this into example, if the forklift's forks are moving up and the user has a quick decision
                    to move left, right, then back up again, the solenoid would transition to the left, and depending on if right was only called during the transition, it wouldn't activate
                    because it couldn't, then start transitioning back to moving up.  This is meant so that the actions are very deliberate and not accidental. 
                </p>
            </div>
        </div>
            <div class="text">
                <p class="description">
                    &nbsp;&nbsp;&nbsp;&nbsp;The PDO communication was created to allow the two CAN buses to communicate efficiently
                    with each other. The main purpose of this is to ensure they are able to send and receive a response within 100ms, 
                    the international regulation. PDO is primarily designed for transmitting time-sensitive data, such as sensor readings 
                    or control signals, with minimal delay. There were three factors I had to consider: sending/receiving duplicated messages, 
                    message skips, and not receiving a message at all.  To ensure that the message was sent and received, I created a counter that
                    send messages every 10ms, and if the message was received, it would reset the counter.  If a message was not received withing 91ms, 
                    an error would be thrown. since a message was not received within the 100ms timeframe.  If a message was received, within 11ms and 91ms,
                    then a warning would be thrown since messages were skipped.
                      <br><br> 
                </p>
        </div>
    </div>
</body>
</html>
