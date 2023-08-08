<!DOCTYPE html>
<html lang="en">

<head>
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <style>
        /* Reset some default styles */
        body,
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            color: #333333;
        }

        /* Main container */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        .header {
            text-align: center;
            padding-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 16px;
            color: #666666;
        }

        /* Logo */
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
            height: auto;
        }

        /* Content */
        .content {
            padding: 20px;
            background-color: #f5f5f5;
        }

        .content h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .content p {
            margin-bottom: 20px;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding-top: 20px;
            background-color: #f5f5f5;
        }

        .footer p {
            font-size: 14px;
            color: #999999;
        }

        .social {
            margin-top: 10px;
            text-align: center;
        }

        .social a {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="https://experthub.ng/"> <img src="{{ asset('/bootcamp/images/logo-color.png')}}" alt="Logo">
                </a>
            </div>
      
        </div>
        <div class="content" >
  

            <p>Hello, thank you for registering for the free web development boot camp organized by Expert-hub 
                Software Solution. We are excited to have you join us in this fantastic learning opportunity.</p>


<p>We are happy to inform you that your screening will take place at our office location at No 1 Court Road, behind the Total Filling Station adjacent to the Bet9ja shop.
 The screening is part of the boot camp selection process and will assess your basic knowledge of web development concepts and skills. </p>


<p>The screening is on   2023, at 10:00 AM. Please arrive at least 15 minutes before the scheduled time and bring a
 valid ID card, a copy of your registration confirmation email and a file. You must also bring your laptop and charger to complete practical tasks on your device. </p>



<p>The screening will last about 10 mins for each participant, and we will notifyyou of the results within
     24 hours. If you pass the screening, youjoin the boot camp, which will start
      on {{$data['scheduleDay']}}, 2023, and run for three months! 
The boot camp will cover HTML, CSS, JavaScript, Bootstrap,  PHP, and Laravel. You will also get to work on real-world projects and receive mentorship from experienced web developers.</p>


<p>We hope you are as excited as we are about this opportunity, and we look forward to seeing you at the screening. Please confirm your attendance by replying to this email or calling us at +234-706-713-2390. 
If you have any questions or concerns, please do not hesitate to contact us. </p>


<p>Best regards,</p>


<small>Expert-hub Software Solution Team </small>
    
        </div>
        <div class="footer">
            <div class="social">
                <!-- <img src="logo.png" alt="Logo"> -->
                <a href="https://www.facebook.com/profile.php?id=100089116612638&mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/_expert_hub"><i class="fa fa-twitter"></i></a>
                <!-- <a href="#"><img src="instagram.png" alt="Instagram"></a> -->
            </div>
            <p> © 2023. Expert-hub Software Solution.</p>
        </div>
    </div>
</body>

</html>