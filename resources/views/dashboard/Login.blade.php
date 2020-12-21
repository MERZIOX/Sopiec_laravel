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
        <form class="form-signin" method="POST" action="#">
            <div class="text-center mb-4">
                <img class="mb-4" src=" {{ asset('img/Nativapps-logo.png') }} " alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">NativApps</h1>
                <p>Login to you account</p>
            </div>

            <div class="form-label-group">
                <input type="text" name="username" id="inputCC" class="form-control" placeholder="CC" required
                    pattern="[0-9!?-]{1,15}" title="Sólo puedes ingresar numeros del 0-9">
                <label for="inputCC">C.C.</label>
            </div>

            <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"
                    required>
                <label for="inputPassword">Password</label>
            </div>
            <div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted text-center"><a href="forgotpass.php">Forgot password?</a> </p>
            </div>

            <div class="invisible" style="border: solid 1px #000;" ;>
                <input id="alerta-login" type="text" value="">
            </div>
        </form>
    </div>
</body>

</html>
