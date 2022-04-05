<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ url('/backend/login/css/style.css') }}">
</head>
<body>
    <center>
        <form action="" method="post">
          @csrf
            <div class="container">
              <label for="name"><b>NAME</b></label>
              <input type="text" placeholder="Enter Your Name" name="name" required>

              <label for="uname"><b>EMAIL</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
          
              <label for="psw"><b>PASSWORD</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
          
              <button type="submit">SUBMIT</button>
            </div>
          </form>
    </center>
    
</body>
</html>