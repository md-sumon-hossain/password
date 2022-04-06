@extends('backend.master')


@section('content')


<div class="container" style="margin-top: 100px; margin-left: 30px;">
<h1>USER LIST</h1>

    {{-- <a href="" class="btn btn-success">Create an employee</a> --}}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Sl</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $key=>$user)
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><img src="{{asset('/uploads/images/'.$user->image)}}" width="90px" alt="nothing"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection