
@extends('layouts.main')

@section('container')
    <h3>Halaman About</h3>
    
    <h4>{{ $name }}</h4>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    
@endsection
   
