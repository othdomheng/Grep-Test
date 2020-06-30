<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login Successfully</h1>
    <p>your email is:{{Auth::user()->email}}</p>
    <p>your phone is:{{Auth::user()->phone}}</p>
</body>
</html>
