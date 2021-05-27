@extends('layout.index')

@section('content')
    <a href="{{ route('adduser') }}" class="btn">Add User</a>
    {{--{{$dataTable->table}}
    {{$dataTable->scripts()}}--}}
@endsection
