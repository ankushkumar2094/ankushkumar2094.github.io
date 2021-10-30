@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-8" >
            <strong>Admin Panel</strong>
        </div>
    <div class="top" align="right">
        <a class="btn btn-warning" href="{{route('rejectedUser')}}">Rejected Users</a>
    </div>

    <div>
        <table class=" table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email-Id</th>
                <th>Time of registration</th>
                <th>Aprrove/Reject</th>
            </tr>
                </thead>
            <tbody>
            @foreach($users as $user)    
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td><a class="btn btn-primary" href="{{route('approve',$user->id)}}">Approve</a><a class="btn btn-danger" href="{{route('reject',$user->id)}}">Reject</a></td>
            </tr>
                @endforeach
            </tbody>
        
            </table>
        </div>

        <div class="bottom" align="right">
            <a class="btn btn-success" href="{{route('PDFUsers')}}">Print Records</a>
        </div>
</div>


@endsection