@extends('layouts.app')
@section('content')
<h1>Insert Options</h1>
<form method ="post"  action="{{ action('OptionController@store')}} ">
    {!! csrf_field() !!}
    <div class="form-group">
    @foreach($options as $option)
        <input type="text" name="option" class="form-control" id="formGroupExampleInput2"
        placeholder="My first option" value="{{ $option->option_name }}">
    @endforeach
    </div>
    </form>
    <a class= "btn btn-primary" href="{{ action('OptionController@create') }}">Add Options</a>

    <a class= "btn btn-primary" href="{{ action('OptionController@create') }}">Complete Form</a>
@endsection
