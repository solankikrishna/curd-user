@extends('layout.index')

@section('content')
    {{--@if (Request::get('action') == 'create')--}}
        {{--@can('create', new App\User)--}}
            {!! Form::open(['route' => 'user.store']) !!}
            {!! FormField::text('first_name', ['required' => true, 'label' => trans('user.first_name')]) !!}
            {!! FormField::text('last_name', ['required' => true, 'label' => trans('user.last_name')]) !!}
            {!! FormField::select('city_id', $cityList, ['required' => true, 'label' => trans('user.city'), 'placeholder' => trans('user.selectCity')]) !!}
            {!! FormField::email('email', ['required' => true,'label' => trans('user.email')]) !!}
            {!! FormField::password('password', ['required' => true,'label' => trans('user.password')]) !!}
            {!! FormField::radios('gender',trans('user.genderArr') ,['required' => true,'label' => trans('user.gender')]) !!}
            {{--{!! Form::checkboxes('group', ['1'=>$hobbiesList]) !!}--}}
            {!! Form::submit(trans('user.create'), ['class' => 'btn btn-success']) !!}
            {{--{{ link_to_route('employees.index', trans('app.cancel'), [], ['class' => 'btn btn-default']) }}--}}
            {!! Form::close() !!}
        {{--@endcan--}}
    {{--@endif--}}
@endsection
