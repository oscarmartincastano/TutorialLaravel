{{-- <x-app-layout>
    <div class="max-w-4xl mx-auto px-4">
    {{-- <h1>Welcome to the HomePage</h1> --}}

    <x-alert2 type="success" class="mb-4">
        <x-slot name="title">
            <h1>Titulo de la alerta</h1>
        </x-slot>
    </x-alert2>

    <p >Hola mundo</p>
    </div>
</x-app-layout> --}}


{{-- A través de plantillas --}}
@extends('layouts.app')

@section('title', 'Home')

@push('css')
    <style>
        body {
            background-color: #f3f4f6;
        }
    </style>

@endpush

@push('css')
    <style>
        body {
            color: #2f6ce5;
        }
    </style>

@endpush
@section('content')
    <div class="max-w-4xl mx-auto px-4">
    {{-- <h1>Welcome to the HomePage</h1> --}}

    <x-alert2 type="success" class="mb-4">
        <x-slot name="title">
            <h1>Titulo de la alerta</h1>
        </x-slot>
    </x-alert2>

    <p >Hola mundo</p>
    </div>
@endsection