<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ url('/backend/login/css/style.css') }}">
</head>
<body>
    <center>
        <form action="{{ route('backend.userUpdate',$user->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="container">
              <label for="name"><b>NAME</b></label>
              <input type="text" value="{{ $user->name }}" placeholder="Enter Your Name" name="name" required>

              <label for="uname"><b>EMAIL</b></label>
              <input type="text" value="{{ $user->email }}"  placeholder="Enter Email" name="email" required>

              <label for="img"><b>IMAGE</b></label>
              <input type="file" placeholder="Enter your image" name="image" >
          
              <button type="submit">SUBMIT</button>
            </div>
          </form>
    </center>
    
</body>
</html>