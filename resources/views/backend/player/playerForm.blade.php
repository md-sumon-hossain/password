@extends('backend.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ url('/backend/login/css/style.css') }}">
</head>
<body>
    <center>
        <form action="{{ route('players.store') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="container">
              <label for="uname"><b>Name</b></label>
              <input type="text" placeholder="Give a post title" name="name" required>
          
              <label for="psw"><b> Country</b></label>
              <input type="text" placeholder="Describe" name="country" required>

              <label for="img"><b>IMAGE</b></label>
              <input type="file" placeholder="Enter your image" name="image[]" >

              <label for="img"><b>Add Image</b></label>
              <input type="file" placeholder="Enter your image" name="image[]" >

              <label for="img"><b>Add Image</b></label>
              <input type="file" placeholder="Enter your image" name="image[]" >
          
              <button type="submit">Submit</button>
            </div>
          </form>
    </center>
    <script type="text/javascript">
        $(document).ready(function() {
          $(".btn-success").click(function(){ 
              var lsthmtl = $(".clone").html();
              $(".increment").after(lsthmtl);
          });
          $("body").on("click",".btn-danger",function(){ 
              $(this).parents(".hdtuto").remove();
          });
        });
    </script>
    
</body>
</html>



@endsection








