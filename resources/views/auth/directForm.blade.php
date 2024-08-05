<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Xin chào </h2>
    <p>Bạn vui lòng click vào <a href="{{route('resetPass',['token'=>$token,'id'=>$user->id])}}">đây</a> để đặt lại mật khẩu</p>
</body>
</html>