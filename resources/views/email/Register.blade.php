<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoa Tiên Paradise - Đăng kí nhận tư vấn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .order-details {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        .order-details th, .order-details td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .order-details th {
            background-color: #f2f2f2;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Dự án Hoa Tiên Paradise </h1>
    <h2>Thông tin người nhận đăng kí tư vấn:</h2>
    <ul>
        <li><strong>Họ và Tên:</strong> {{ $name }}</li>
        <li><strong>Số Điện Thoại:</strong> {{ $phone }}</li>
        <li><strong>Email</strong> {{ $email }}</li>
        <li><strong>Yêu cầu chi tiết </strong> {{ $detail}}</li>
    </ul>
</body>
</html>
