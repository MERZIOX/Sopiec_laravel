<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('css/floating-labels.css') }} ">
</head>

<body>
    @yield('content')
    <div class="container-fluid">

        {{-- @if (session('noExiste'))
            <div class="col-4 alert alert-danger alert-dismissible fade show position-absolute" role="alert"
                style="top:10%; right:10%">
                {{ session('noExiste') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif --}}
        <form class="form-signin" method="POST" action="{{ route('store') }}">
            @csrf
            <div class="text-center mb-4">
                <img class="mb-4" src=" {{ asset('img/Nativapps-logo.png') }} " alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">NativApps</h1>
                <p>Login to you account</p>
            </div>

            <div class="form-label-group">
                <input type="number" name="username" id="inputCC" class="form-control" placeholder="CC" required
                    pattern="[0-9!?-]{1,15}" title="Sólo puedes ingresar numeros del 0-9">
                <label for="inputCC">C.C.</label>
                @if (session('noExiste'))
            <small class="text-danger">{{session('noExiste')}}</small>
        @endif
            </div>

            <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"
                    required>
                <label for="inputPassword">Password</label>
                @if (session('noPass'))
                <small class="text-danger">{{session('noPass')}}</small>
            @endif
            </div>
            <div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted text-center"><a href="{{ route('users.index') }}">Forgot password?</a>
                </p>
            </div>

            <div class="invisible" style="border: solid 1px #000;" ;>
                <input id="alerta-login" type="text" value="">
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
            integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>
