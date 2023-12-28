<!-- copilot prompt - html code for a fancy, over the top, way of saying "coming soon" -->
<?php $thisPage="career"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Coming Soon</title>
    <link rel="stylesheet" href="/Styles/personalwebsite_styles.css">

    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 200px;
        }
        
        h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        p {
            font-size: 24px;
            margin-bottom: 40px;
        }
        
        .glow {
            animation: glowing 2s infinite;
        }
        
        @keyframes glowing {
            0% {
                text-shadow: 0 0 10px #fff;
            }
            50% {
                text-shadow: 0 0 20px #fff;
            }
            100% {
                text-shadow: 0 0 10px #fff;
            }
        }
    </style>
</head>
<body>
    <? include "/Code/header.php" ?>
    <h1 class="glow">Coming Soon</h1>
    <p>Working on something amazing!</p>
</body>
</html>
