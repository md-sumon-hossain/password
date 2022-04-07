@extends('backend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ url('/backend/login/css/style.css') }}">
</head>
<body>
    <center>
        <form action="{{ route('post.submit') }}" method="post">
          @csrf
            <div class="container">
              <label for="uname"><b>Title</b></label>
              <input type="text" placeholder="Give a post title" name="title" required>
          
              <label for="psw"><b> Post Details</b></label>
              <input type="text" placeholder="Describe" name="details" required>
          
              <button type="submit">Submit</button>
            </div>
          </form>
    </center>
    
</body>
</html>
@endsection








