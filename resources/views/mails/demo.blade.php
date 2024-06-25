<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Mail</title>
</head>
<body>

    </head>
    <body>
        <div class="header">
            <h1>Company joining Notification</h1>
        </div>
        <div class="content">
            <p>Dear User,</p>
            <p>We wanted to inform you that the company <strong>{{ $name }}</strong> has been add from our records.</p>
            <p>If you have any questions, please contact us.</p>
            <p>EMAIL: {{ $email }}</p>
        </div>
        <div class="footer">
            <p>Best regards,</p>
            <p>Your Company</p>
        </div>
    </body>
    </html>


    <style>
        .header {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }
        .content {
            margin: 20px;
        }
        .footer {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: center;
        }
    </style>

</body>
</html>
