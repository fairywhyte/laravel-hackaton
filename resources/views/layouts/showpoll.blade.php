@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="user-name"><h2>{{ $poll->name}}</h2></div>
        <div class="user-name"><h2>{{ $poll->description}}<h2></div>
        <p><a class="btn btn-default" href ="{{ action('OptionController@create',[$poll->code]) }}" role="button">Next</a></p>
    </div>

@endsection