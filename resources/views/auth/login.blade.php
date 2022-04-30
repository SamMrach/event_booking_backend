@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card fat">
                <div class="card-body">
                    <h4 class="card-title">Login</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>


                            <input id="email" type="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif

                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>


                            <input id="password" type="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif

                        </div>



                        <div class="form-group m-0">

                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button>



                        </div>
                        <div class="mt-4 text-center">
                            Dont have an account? <a href="{{route('register')}}">register</a>
                        </div>




                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection