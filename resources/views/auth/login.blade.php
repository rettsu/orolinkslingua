@extends('layouts.app')

@section('title')
    Orolinks Lingua
@endsection

@section('content')
    <div class="container"> 

      <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">OROLinks Lingua</h1>
            <p class="col-lg-10 fs-4">Linking your golden goals through learning the English Language.</p>
          </div>
          <div class="col-md-10 mx-auto col-lg-5">
            <main class="form-signin w-100 m-auto">
              <form method="POST" action="">
                @csrf
                <img class="mb-4" src="{{ asset('images/logo v3.0.png') }}" alt="" width="100" height="40">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <hr>

                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username or contact" required>
                  <label for="floatingInput">Username or Contact</label>
                </div>
                <br>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                  <label for="floatingPassword">Password</label>
                </div>

                {{-- <div class="form-check text-start my-3">
                  <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                  </label>
                </div> --}}
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
              </form>
            </main>
          </div>
        </div>
      </div>

    </div>
@endsection


{{-- @extends('layouts.footer') --}}
{{-- @section('footer') --}}