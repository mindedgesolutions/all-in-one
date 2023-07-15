@extends('layouts.auth-main')

@section('title', 'Login | ' . config('app.name'))

@section('content')

@livewire('auth.login')

@endsection