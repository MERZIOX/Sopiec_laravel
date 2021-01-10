@extends('layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header card-header-primary">
                <h4 class="card-title mt-0"> Listado de usuarios</h4>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="">
                            <th>
                                Cedula
                            </th>
                            <th>
                                Area
                            </th>
                            <th>
                                P.Nombre
                            </th>
                            <th>
                                S.Nombre
                            </th>
                            <th>
                                P.Apellido
                            </th>
                            <th>
                                S.Apellido
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Rol
                            </th>
                            <th>
                                Acciónes
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->cc }} </td>
                                    <td>{{ $user->area }} </td>
                                    <td>{{ $user->firstName }} </td>
                                    <td>{{ $user->secondName }} </td>
                                    <td>{{ $user->fLastName }} </td>
                                    <td>{{ $user->sLastName }} </td>
                                    <td>{{ $user->email }} </td>
                                    <td></td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }} "> <span class="material-icons">
                                                create
                                            </span></a>
                                        <a href="{{ route('users.destroy', $user->id) }} "><span class="material-icons">
                                                delete_forever
                                            </span></a>

                                        <a href="{{ route('users.show', $user->id) }} "><span class="material-icons">
                                                visibility
                                            </span></a>
                                    </td>

                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{ $users->links() }}
@endsection
