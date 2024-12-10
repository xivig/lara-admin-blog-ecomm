@extends('user')

@section('title', 'Xivig User registration ')

@section('content')

    <!-- ============================================================== -->
    <!-- dashboard -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
         >
        <main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <div class="row">
            <div class="col-md-11">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="{{asset('user/assets/images/favicon.png')}}" alt="BootstrapBrain Logo" width="16">
                </a>
            </div>
            <div class="col-md-1">
                <a class="btn btn-danger btn-lg dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

    </header>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">

        @session('success')
            <div class="alert alert-success" role="alert">
              {{ $value }}
            </div>
        @endsession

        <h1 class="display-5 fw-bold">Hi, {{ auth()->user()->name }}</h1>
        <p class="col-md-8 fs-4">Welcome to dashboard.<br/>Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Dashboard</button>
      </div>
    </div>

  </div>
</main>
    </div>
    <!-- ============================================================== -->
    <!-- dashboard -->
    <!-- ============================================================== -->
@endsection
