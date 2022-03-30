<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ url('/backend/login/css/style.css') }}">
</head>
<body>
    <center>
        <form action="{{ route('forget.password.post') }}" method="post">
          @csrf

            @if(session()->has('msg'))
                <p class="alert alert-danger"><b>{{session()->get('msg')}}</b></p>
            @endif

            <div class="container">
              <label for="uname"><b>PLEASE ENTER YOUR EMAIL</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>

              <button type="submit">SUBMIT</button>
            </div>
          </form>
    </center>
    
</body>
</html>