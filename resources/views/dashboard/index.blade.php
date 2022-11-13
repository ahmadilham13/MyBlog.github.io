@extends('dashboard.layouts.main')

@section('content')
    {{-- Alert Nofif Start--}}
    @if (session()->has('notif'))
      <div class="alert alert-warning" role="alert">
        {{ session('notif') }}
      </div>
    @endif
    {{-- Alert Notif End--}}
    {{-- Alert Success Start--}}
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif
  {{-- Alert Success End--}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
    </div>
@endsection