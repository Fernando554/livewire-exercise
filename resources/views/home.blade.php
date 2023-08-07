@extends('layout.template')
@section('title', 'Lista de Postulaciones')
@livewireStyles
@section('content')
@if (session()->has('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif

@if ($errors->has('application'))
<div class="alert alert-danger">{{ $errors->first('application') }}</div>
@endif
@if (session()->has('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif

@if ($errors->has('message'))
<div class="alert alert-danger">{{ $errors->first('message') }}</div>
@endif
    <livewire:postulacion-form :applicationId="$applicationId" />

    <!-- Tu contenido del cuerpo aquí -->

    @livewireScripts
@endsection

