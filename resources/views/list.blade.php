@php ($titleName = 'List')
@php($activeHome = '')
@php($activeList = 'active')
@php($activeAdd = '')
@php($activeRegister = '')
@php($activeLogin = '')

@extends("layout.layout")

@section('content')
<div class="container">

    @if (Session::has('status'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif


    {{-- {{ $item->name }} --}}
    <p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($restaurentDBdata as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->address }}</td>
                <td>
                    <a href = "/delete/{{ $item->id }}"><i class="fas fa-trash"></i></a>
                    <a href = "/edit/{{ $item->id }}"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </p>
    {{-- {{ $restaurentDBdata }} --}}

</div>

@endsection