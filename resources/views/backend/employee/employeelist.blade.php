@extends('backend.master')


@section('content')


<div class="container" style="margin-top: 100px; margin-left: 30px;">
<h1>USER LIST</h1>
    <link rel="stylesheet" href="{{ asset('backend/registration/css/style.css') }}">
    <div class="registration_button">
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Sl</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($employees as $key=>$employee)
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->email}}</td>
                    <td><img src="{{asset('/uploads/images/'.$employee->image)}}" width="90px" alt="nothing"></td>
                    <td>
                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                        <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection