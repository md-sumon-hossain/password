<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ url('/backend/login/css/style.css') }}">
</head>
<body>
    <center>
        <form action="{{ route('dologin') }}" method="post">
      
            <div class="container">
              <label for="uname"><b>USERNAME</b></label>
              <input type="text" placeholder="Enter Username" name="name" required>
          
              <label for="psw"><b>PASSWORD</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
          
              <button type="submit">LOGIN</button>
              <a class="forgot" href="">FORGOT ?</a>
            </div>
          </form>
    </center>
    
</body>
</html>








