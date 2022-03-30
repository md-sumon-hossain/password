<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PASSWORD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ url('/backend/master/css/style.css') }}">
</head>
<body>
    <!-- header-->

    @include('backend.fixed.header')


    <!-- sidebar starts-->
    @include('backend.fixed.sidebar')
    @yield('content')


    <!-- footer starts-->
        {{-- <div class="footer">
            <center>
               <P>COPYRIGHTS: ALL RIGHTS RESERVED @ PASSWORD</P> 
            </center>
        </div> --}}
    <!-- sfooter ends-->



</body>
</html>