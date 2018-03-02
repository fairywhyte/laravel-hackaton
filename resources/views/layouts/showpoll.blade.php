@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="question-left">
            <div class="user-avatar">
                <img class="img-fluid"
                     src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
            </div>
        <div class="user-name">{{ $poll->name}}</div>
        <div class="user-name">{{ $poll->description}}</div>
    </div>
@endsection