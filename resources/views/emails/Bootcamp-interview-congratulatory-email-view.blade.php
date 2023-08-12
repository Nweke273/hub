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
            <!-- <h1>Welcome to Our Newsletter</h1>
      <p>Stay updated with our latest news and offers.</p> -->
        </div>
        <div class="">


            <h2>Dear {{ $email }},</h2>
            <p style="margin-bottom: 1rem;">Congratulations! We are thrilled to inform you that your application for the free Web Development Boot Camp
                was successful. Your dedication to learning and passion for web development earned you a spot in our program.</p>

            <p style="margin-bottom: 1rem;">
                We are excited to have you on board as part of this journey. The training will commence on
                Monday, August 14, 2023, at 10:00 AM. We have a dynamic curriculum lined up
                that will provide you with the essential skills and knowledge needed to excel in web development.</p>
            <p style="margin-bottom: 1rem;">
                Please ensure you're prepared to dive in on this date.
                You will receive further details regarding the schedule and any preparatory materials that might be helpful</p>
            <p style="margin-bottom: 1rem;">
                Once again, congratulations on this achievement. We look
                forward to seeing you thrive in the Web Development Boot Camp!</p>

            Best regards, The Expert-hub Software Solution Team.

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