@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                        <div class="container">
                        <!-- Example row of columns -->
                        <a class= "btn" href="{{ action('PollController@create') }}">Create a Poll</a>
                            <div class="row">
                            @foreach($polls as $poll)
                                <div class="col-md-4">
                                    <h2>{{ $poll-> name }}</h2>
                                    <p><a class="btn btn-default" href ="{{ action('PollController@show',[$poll->code]) }}" role="button">View Poll</a></p>
                                    <h2>{{ $poll -> description }}</h2>
                                </div>
                            @endforeach
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            You are logged in!
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>
