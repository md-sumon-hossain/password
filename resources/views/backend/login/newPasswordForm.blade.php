<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ url('/backend/login/css/style.css') }}">
</head>
<body>
    <center>
        <form action="{{ route('reset.password.post') }}" method="post">
          @csrf
          <input type="hidden" name="reset_token" value="{{$token}}">
          
            @if(session()->has('msg'))
                <p class="alert alert-danger"><b>{{session()->get('msg')}}</b></p>
            @endif

            <div class="container">
              <label for="uname"><b>PLEASE ENTER YOUR PASSWORD</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>

              <label for="uname"><b>RETYPE YOUR PASSWORD</b></label>
              <input type="password" placeholder="Retype Password" name="password_confirmation" required>
            </div>

            {{-- <div class="container">
                <input type="password" id="password" placeholder="Retype Password" name="password" required autofocus>
                @if ($errors->has('password'))
                    <span>{{ $errors->first('password') }}</span>
                @endif
            </div> --}}


            <div class="container">
                <button type="submit">SUBMIT</button>
            </div>
          </form>
    </center>
    
</body>
</html>