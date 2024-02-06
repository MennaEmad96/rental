<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Email</title>
    <style>
        /* Reset styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        /* Wrapper */
        .email-wrapper {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
        }
        /* Header */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #333;
            margin: 0;
            padding: 10px 0;
        }
        /* Content */
        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .content p {
            color: #333;
            line-height: 1.6;
        }
        /* Footer */
        .footer {
            text-align: center;
            color: #666;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="email-wrapper">
        <div class="header">
            <h1>CarRental</h1>
        </div>

        <div class="content">
            <p>Hello, {{ $data['firstName'] }} {{ $data['lastName'] }}</p>

            <p>{{ $data['email'] }}</p>

            <p>{{ $data['content'] }}</p>

        </div>

        <div class="footer">
            <p>Thank you for reaching out!<br>
        </div>
    </div>

</body>
</html>