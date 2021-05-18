<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="{{route('user.post.login')}}" method="POST">
            @csrf
            <input type="text" name="email" id="" placeholder="Email">
            <input type="password" name="password" id="" placeholder="Mật khẩu">
            <input type="submit" value="Đăng nhập">
        </form>
    </div>
</body>

</html>