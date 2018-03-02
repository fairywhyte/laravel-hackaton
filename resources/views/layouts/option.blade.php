@extends('layouts.app')
@section('content')
<h1>Insert Options</h1>
<form method ="post"  action="{{ action('OptionController@store', [$code]) }} ">
    {!! csrf_field() !!}
    <div class="form-group">
        <input type="text" name="option" class="form-control" id="formGroupExampleInput2"
        placeholder="My first option">
    </div>
    <button class="btn btn-primary" type="submit" >Save</button>
    </form>

@endsection
