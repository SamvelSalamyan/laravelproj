<!doctype html>
<html lang="{{app ()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Login</title>
</head>
<body>

<button class="btn btn-primary"><a style="color: #1b1e21; text-decoration: none"  href="/">Home Page</a> </button>
<div class="container">
<h1 style="text-align: center">Log in</h1> <br>
<form class="col-3 offset-4 border rounded" method="POST" action="{{route('user.login')}}">
    @csrf
    <div class="form-group">
        <label for="email" class="col-form-label-lg">Your Email</label>
        <input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password" class="col-form-label-lg">Password</label>
        <input class="form-control" id="password" name="password" type="password" value="" placeholder="Password">
        @error('password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Log In</button>
    </div>
</form>
</div>

</body>
</html>
