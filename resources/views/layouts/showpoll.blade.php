@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="user-name">{{ $poll->name}}</div>
        <div class="user-name">{{ $poll->description}}</div>
    </div>
@endsection