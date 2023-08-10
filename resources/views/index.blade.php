<!-- resources/views/index.blade.php -->
@extends('layout.template')
@section('title', 'Lista de Postulaciones')
@section('content')
@livewireStyles()

@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('message'))
    <div class="alert alert-danger">
        <ul>
            @foreach(session('message') as $failure)
                @foreach($failure->errors() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endforeach
        </ul>
    </div>
@endif

@if ($errors->has('application'))
<div class="alert alert-danger">{{ $errors->first('application') }}</div>
@endif
<a class="btn btn-warning float-end" href="{{ route('export') }}">Export User Data</a>
<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" class="form-control">
    <br>
    <button class="btn btn-success">Import User Data</button>
</form>
    <livewire:postulaciones-index />
@livewireScripts()
@endsection
