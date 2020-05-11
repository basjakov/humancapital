<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
@import "bourbon";

body {
  background: #eee !important;
}

.wrapper {
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);

  .form-signin-heading,
  .checkbox {
    margin-bottom: 30px;
  }

  .checkbox {
    font-weight: normal;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    box-sizing:border-box;

    &:focus {
      z-index: 2;
    }
  }

  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}


      </style>                         
    <div class="wrapper">
      <form method="POST" action="{{ route('login') }}" class="form-signin">  
        @csrf     
        <h2 class="form-signin-heading">{{ __('Login') }}</h2>
          <input type="email" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
        @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
        @enderror
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
        @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
        @enderror
        <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe" {{ old('remember') ? 'checked' : '' }}> Remember me
        </label>
        
            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif   
      </form>
  </div>
</body>
</html>