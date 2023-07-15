@extends('layouts.auth-main')

@section('title', 'Register | ' . config('app.name'))

@section('content')

@livewire('auth.register-new')

@endsection