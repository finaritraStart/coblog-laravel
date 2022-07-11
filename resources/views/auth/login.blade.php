@extends('layouts.app')

@section('content')


<style type="text/css">
    * {
        font-family: "Google Sans", "Noto Sans Myamar UI", arial, sans-serif;
    }

    .main {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }



    /*input field*/
    input[type=email],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /*button*/
    button {
        background-color: #4285F4;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 50%;
    }

    button:hover {
        filter: brightness(90%);
        box-shadow: 0px 1px 1px rgb(173, 172, 172);
    }

    .avatar-div,
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 20%;
        border-radius: 50%;
    }


    .log-container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    .main {
        margin-top: 5%;
    }

    .main .modal-content {
        display: flex;
        border: 1px solid #DADCE0;
        padding-top: 40px;
        width: 450px;
        height: auto;
        flex-direction: column;
        border-radius: 7px;


    }


    @media scream and (max-width: 640px) {
        .modal-content {
            width: 350%;
        }
    }
</style>

<div class="main">
    <div id="id01" class="modal">

        <form class="modal-content animate" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="imgcontainer">
                <img src="avatar5.png" alt="" class="avatar">

                <h3>{{ __('Login') }}</h3>


            </div>

            <div class="log-container">
                <!--  <label><b> {{ __('E-Mail Address') }}:</b></label>-->
                <input type="email" placeholder="votre adresse mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror

                <!-- <label><b> {{ __('Password') }}:</b></label>-->
                <input id="password" type="password" placeholder="votre mot de passe" class="@error('password')  @enderror" name="password" required>

                @error('password')
                <p>
                    {{ $message }}
                </p>
                @enderror



                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
                <br>


                <button type="submit">
                    {{ __('Login') }}
                </button>

                @if (Route::has('register'))
                <p>
                    {{ __("Don't have an account?") }}
                    <a href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                </p>
                @endif

            </div>

            <div class="container" style="background-color: #f1f1f1;">

                <span class="password"> @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif </span>

            </div>

        </form>

    </div>
</div>







@endsection