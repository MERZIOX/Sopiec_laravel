<title>Registrar usuario</title>
@extends('layouts.master')
@section('content')
    {{-- var_dump es para mostrar texto en pantalla, errors-any() es para detectar si existe
    algún error en nuestro formulario. --}}
    {{-- {{ var_dump() }} --}}

    {{-- @include('dashboard.partials.validation-error') --}}

    <div class="container-fluid">

        <div class="row">
            {{-- Formulario --}}
            <div class="col-md-8">

                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Registrar usuario</h4>
                            <p class="card-category">Ingrese los datos</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Cedula</label>
                                            <input type="number" class="form-control" name="cc" value=" {{ old('cc') }} ">
                                            @error('cc')
                                                <small class="text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Area</label>
                                            <input type="text" class="form-control" name="area" value=" {{ old('area') }} ">
                                            @error('area')
                                                <small class="text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Primer Nombre</label>
                                            <input type="text" class="form-control" name="firstName"
                                                value=" {{ old('firstName') }} ">
                                            @error('firstName')
                                                <small class="text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Segundo Nombre</label>
                                            <input type="text" class="form-control" name="secondName"
                                                value=" {{ old('secondName') }}">
                                            @error('secondName')
                                                <small class=" text-danger">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Primer Apellido</label>
                                            <input type="text" class="form-control" name="fLastName"
                                                value=" {{ old('fLastName') }}">
                                            @error('fLastName')
                                                <small class=" text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Segundo Apellido</label>
                                            <input type="text" class="form-control" name="sLastName"
                                                value=" {{ old('sLastName') }}">
                                            @error('sLastName')
                                                <small class=" text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input type="email" class="form-control" name="email"
                                                value=" {{ old('email') }}">
                                            @error('email')
                                                <small class="text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Contraseña</label>
                                            <input type="password" class="form-control" name="password" id="password">
                                            @error('password')
                                                <small class="text-danger"> {{ $message }} </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Confirmar Contraseña</label>
                                            <input type="password" class="form-control" name="password_confirmation"
                                                id="password_confirmation">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Registrar
                                    usuario</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
            {{-- Card profile --}}
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="javascript:;">
                            <img class="img" src="{{ asset('img/faces/marc.jpg') }} " />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                        <h4 class="card-title">Alec Thompson</h4>
                        <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I
                            love
                            you
                            like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </p>
                        <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
