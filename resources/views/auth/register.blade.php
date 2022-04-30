@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card fat">

                <div class="card-body">
                    <h4 class="card-title">Register</h4>
                    <form method="POST" class="my-login-validation" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="name" class="form-control" name="name" value="" required autofocus>
                            <div class="invalid-feedback">
                                Name is invalid
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="" required
                                autofocus>
                            <div class="invalid-feedback">
                                Email is invalid
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">Password

                            </label>
                            <input id="password" type="password" class="form-control" name="password" required data-eye>
                            <div class="invalid-feedback">
                                Password is required
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password
                            </label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                            <div class="invalid-feedback">
                                Password is required
                            </div>
                        </div>



                        <div class="form-group m-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Register')}}
                            </button>

                        </div>
                        <div class="mt-4 text-center">
                            already have an account? <a href="{{route('login')}}">Log In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection