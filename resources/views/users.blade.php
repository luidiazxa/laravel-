<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    @if (session()->has ('flash'))
    <div class="alert alert-info">{{session('flash')}}</div>
    @endif
    <div class="container">

        <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>
                    busqueda de usuarios
                    {{Form::open(['route' => 'users', 'method' => 'GET', 'class' => 'form-inline pull-rigth'])}}
                
                <div class="form-group">
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                </div>

                <div class="form-group">
                        {{ Form::text('email', null ,['class' => 'form-control', 'placeholder' => 'Email'])}}
                </div>

                <div class="form-group">
                        {{ Form::text('bio', null ,['class' => 'form-control', 'placeholder' => 'Bio'])}}
                </div>

                <div class="form-group">
                    <button class="btn btn-outline-info">
                        Injusticia
                    </button>

                </div>
                {{ Form::close()}}
                </h1>
                
                </div>

            </div>
            <div class="col-md-8">
                <table class="table table-hover table-striped">
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->bio }}</td>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
                {{ $users->render()}}
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>