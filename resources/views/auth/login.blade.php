<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    .content{
        max-width: 500px;
        margin: auto;
    }

    .container{
        margin-top: 50px;
    }

    h1{
        text-align: center;
        font-family: emoji;
    }

    .btn{
        font-size: larger;
    }

    .text-left{
        padding: 15px 40px 15px 40px;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    h4{
        float: right;
        margin: 40px 0px;
    }
</style>
<body>
    <div class="container">
        <div class="content">
            <div class="row" style="border: 1px solid gray;">
                <h1>Login Form</h1>
                    <form action="{{ route('login') }}" id="form" method="post">
                            <div class="text-left">
                                <label class="text-muted">{{ __('E-Mail Address') }}</label>
                                <input id="signupInputEmail1" name="email" type="email" placeholder="Email ID" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required="">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="text-left">
                                <label for="signupInputPassword" class="text-muted">{{ __('Password') }}</label>
                                <input id="signupInputPassword" name="password" type="password" placeholder="Password" class="form-control lock-input @error('password') is-invalid @enderror" required="">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!--     <div class="pull-left pad-btm">
                                    <label class="form-checkbox form-icon form-text">
                                    <input type="checkbox" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div> -->
                                <div class="text-left">
                                    <button type="submit" class="btn btn-block btn-primary">
                                         {{ __('Login') }}
                                   <!--  Sign In -->
                                    </button>
                                </div>
                                <!--  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->

                        
                        
                    </form>    
                    <p style="text-align: center;">
                        Don't have an account? <span style="color:#337ab7;"><a href="{{config('app.baseURL')}}/register">Register here</span></a>
                    </p>                     
            </div>  
        </div>
    </div>
</body>
</html>