@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             @if(Session::has('error'))
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            @endif
            
            <div class="jumbotron">
                <div class="w3-panel w3-blue w3-round-xlarge">
                    <div class="panel-heading">Dashboard</div>
                    @if(auth()->user()->isAdmin==1)
                        <a class="btn btn-primary" href="{{route('Admin')}}">Users are waiting for approval</a>
                    @endif
                    
                    <div class="w3-yellow">
                        Welcome {{auth()->user()->name}} !!
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
@endsection
