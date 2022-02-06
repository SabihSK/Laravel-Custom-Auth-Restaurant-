@php($titleName = 'Home')
@php($activeHome = 'active')
@php($activeList = '')
@php($activeAdd = '')
@php($activeRegister = '')
@php($activeLogin = '')

@extends("layout.layout")

@section("content")

<div class="container">
    @if (Session::has('userName'))
    <h3>Welcome, {{ Session::get('userName') }}</h3>
    @endif

    @if (Session::has('notLogin'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">

        {{ Session::get('notLogin') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    I will put data here.</div>

@endsection