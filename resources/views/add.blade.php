@php ($titleName = 'Add')
@php($activeHome = '')
@php($activeList = '')
@php($activeAdd = 'active')
@php($activeRegister = '')
@php($activeLogin = '')


@extends('layout.layout')
@section('content')

<div class="container">

    <div class="col-6">
        <form method="post" , action="/add">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="name" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="address" name="address" class="form-control" placeholder="Enter address">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection