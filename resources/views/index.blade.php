<!-- resources/views/index.blade.php -->
@extends('layout.template')
@section('title', 'Lista de Postulaciones')
@section('content')
@if (session()->has('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif

@if ($errors->has('application'))
<div class="alert alert-danger">{{ $errors->first('application') }}</div>
@endif

    <livewire:postulaciones-index />    
@endsection
