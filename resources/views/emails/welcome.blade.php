<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
            margin: 0;
            padding: 40px 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }
        .header {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            color: white;
            padding: 32px 24px;
            text-align: center;
        }
        .content {
            padding: 32px 24px;
        }
        .button {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 16px;
        }
        .footer {
            background: #f8fafc;
            color: #6b7280;
            text-align: center;
            padding: 20px 24px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome!</h1>
        </div>
        <div class="content">
            <p>Hello {{ $user->name ?? 'there' }},</p>
            <p>Welcome Today Is A Nice Day!</p>
            <p>We are excited to have you with us. Your account has been created successfully.</p>
            <a href="{{ url('/') }}" class="button">Visit our site</a>
        </div>
        <div class="footer">
            Thanks for joining us.<br>
            Team Laravel
        </div>
    </div>
</body>
</html>
