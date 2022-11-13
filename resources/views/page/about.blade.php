@extends('layouts.master')

@section('content')
<center class="mt-5">
    <h1>Halaman About</h1>
    <p>Name : {{ $name }}</p>
    <p>Email : {{ $email }}</p>
    <p><img src="img/{{ $image }}" alt=""></p>
</center>
@endsection