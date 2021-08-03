<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    <div class="background"></div>    
    <div class="container">
        <p data-aos="zoom-in"><?php
	        if ($_GET){
		        echo $_GET['to'];
	        } else {
	            echo "Welcome";
	        }
    	?>,</p>

        <p data-aos="fade-up">You're invited!</p>
        <p data-aos="fade-up" data-aos-delay="500">to celebrate our wedding</p>
        <p data-aos="zoom-in" data-aos-delay="2000">Resa & Resky</p>
        <a class="btn" href="invitation.html" data-aos="fade-up" data-aos-delay="800">
            <img src="/batch/check-verifed.png" alt=""> Open Invitation
        </a>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/js/animation.js"></script>
</body>
</html>