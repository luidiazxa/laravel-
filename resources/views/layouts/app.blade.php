<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <hr>
    @if (session()->has ('flash'))
        <div class="alert alert-info">{{session('flash')}}</div>
     @endif
    <div class="container rounded col-xl-6 col-md-6 col-sm-12" style="background-color: rgba(161, 156, 162, 0.2);">        <hr>
        @yield('content')
    </div>
</body>
</html>