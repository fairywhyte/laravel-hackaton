
@extends('layouts.app')

@section('content')
<h1>Create Poll</h1>
<div class="container">
    <form method ="post"  action="{{ action('PollController@store')}} ">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Jane Doe">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Description</label>
        <input type="text" name="description" class="form-control" id="formGroupExampleInput2" placeholder=" My Description">
    </div>
    <a class= "btn" href="{{ action('OptionController@create') }}">Insert Options</a>

    </form>
    </div>
@endsection