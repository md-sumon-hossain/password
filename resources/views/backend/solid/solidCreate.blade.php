@extends('backend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ url('/backend/login/css/style.css') }}">
</head>
<body>
    <center>
        <form action="{{ route('solid.store') }}" method="post">
          @csrf
            <div class="container">
              <label for="uname"><b>Name</b></label>
              <input type="text" placeholder="Give a post title" name="name" required>
          
              <label for="psw"><b>Details</b></label>
              <input type="text" placeholder="Describe" name="details" required>
          
              <button type="submit">Submit</button>
            </div>
          </form>
    </center>
    
</body>
</html>
@endsection








