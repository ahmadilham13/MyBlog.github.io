@extends('layouts.master')

@section('content')
{{-- Alert Success Start --}}
@if (session()->has('LogoutSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('LogoutSuccess') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
{{-- Alert Success End --}}
    <h1>Halaman Home</h1>
@endsection