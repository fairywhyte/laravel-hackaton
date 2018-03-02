@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="user-name"><h2>{{ $poll->name}}</h2></div>
        <div class="user-name"><h2>{{ $poll->description}}<h2></div>
        <section id="answers">

    <form method ="post"  action="{{ action('ResultController@store',[$poll->code])}}">
    {!! csrf_field() !!}

    <div class="form-group">

        @foreach($poll->options as $option)
        <div class="form-check">
            <input class="form-check-input" type="radio" name="option_id" value="{{ $option->id }}">
            <label class="form-check-label" for="exampleRadios1">{{ $option->option_name}}</label>
        </div>
        @endforeach

<input type="submit"></input>
    </form>
    </div>
    </div>
<p><a class="btn btn-default" href ="{{ action('OptionController@create',[$poll->code]) }}" role="button">Next</a></p>
@endsection

