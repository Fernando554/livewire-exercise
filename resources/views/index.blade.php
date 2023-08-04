<!-- resources/views/index.blade.php -->
@extends('layout.template')

@section('content')
@if (session()->has('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif

@if ($errors->has('application'))
<div class="alert alert-danger">{{ $errors->first('application') }}</div>
@endif

    <div class="container">
        <h1>Lista de Postulaciones</h1>

        <a href="{{ route('home') }}" class="btn btn-primary mb-3">Nueva Postulación</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Imagen/archivo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                    <tr>
                        <td>{{ $application->id }}</td>
                        <td>{{ $application->name }}</td>
                        <td>{{ $application->last_name1 }}</td>
                        <td>{{ $application->last_name2 }}</td>
                        <td>{{ $application->email }}</td>
                        <td>{{ $application->phone }}</td>
                        <td>
                        @if ($application->src)
                            @if (Str::endsWith($application->src, ['.jpg', '.jpeg', '.png', '.gif']))
                                <img src="{{ asset('storage/' . $application->src) }}" alt="Imagen" style="max-width: 500px; max-height: 500px;">
                                <a href="{{ asset('storage/' . $application->src) }}" target="_blank">Ver imagen</a>
                            </img>
                            @else
                                <a href="{{ asset('storage/' . $application->src) }}" target="_blank">Ver archivo</a>
                            @endif
                        @else
                            sin archivo
                        @endif
                        </td>
                        <td>
                            <a href="{{ route('home', ['applicationId' => $application->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
