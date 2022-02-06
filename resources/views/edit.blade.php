@php($titleName = 'Edit')
@php($activeHome = '')
@php($activeList = '')
@php($activeAdd = '')
@php($activeRegister = '')
@php($activeLogin = '')

@extends('layout.layout')
@section('content')


<div class="container">

    <div class="col-6">
        <form method="post" , action="/update">
            @csrf
            <input type="hidden" name="id"  value="{{ $restaurantIdData->id }}">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="name" name="name" class="form-control" value="{{ $restaurantIdData->name }}"
                    placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $restaurantIdData->email }}"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="address" name="address" class="form-control" value="{{ $restaurantIdData->address }}"
                    placeholder="Enter address">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection