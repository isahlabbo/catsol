@extends('layouts.guest')

@section('content')
<form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email" >E-mail Address</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <label for="password"> Password</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input type="checkbox" id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="items-center">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color: white;" href="{{ route('register') }}" id="register"></a>
            </div>

            <div class="flex items-center justify-end mt-4">
                
               @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color: white;" href="{{ route('password.request') }}" id="register">
                        Forgot Password
                    </a>
                @endif
                
                <button class="btn btn-primary" style="background-color: white; color: rgb(16, 16, 173);">
                    {{ __('Log in') }}
                </button>
                <a class="btn btn-outline-primary" style="color: white;" href="{{url('/')}}">Home</a>
            </div>
        </form>
@endsection