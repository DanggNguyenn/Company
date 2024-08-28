<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành công</title>
</head>
<body>
    <h1>Chào {{ $user->name }},</h1>
    <p>Bạn đã đăng ký thành công tài khoản của chúng tôi!</p>
    <p>Cảm ơn bạn đã tham gia với chúng tôi.</p>
    <p>Trân trọng,<br>{{ config('app.name') }}</p>
</body>
</html>
