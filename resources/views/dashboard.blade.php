@extends('layouts.main')

@section('title', 'Home')

@section('content')
<h2 class="mb-4 text-center">Welcome, {{ auth()->user()->name }} 🎉 lol</h2>
@endsection
