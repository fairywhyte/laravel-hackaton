
@extends('layouts.app')

@section('content')
<h1>Create Poll</h1>
<div class="container">
    <form method ="post"  action=" ">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Jane Doe">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Description</label>
        <input type="text" name="description" class="form-control" id="formGroupExampleInput2" placeholder=" My Description">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Option 1</label>
        <input type="text" name="option" class="form-control" id="formGroupExampleInput2" placeholder="My first option ">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Option 2</label>
        <input type="text" name="option" class="form-control" id="formGroupExampleInput2" placeholder="My second option ">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Option 3</label>
        <input type="text" name="option" class="form-control" id="formGroupExampleInput2" placeholder="My third option ">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </div>
@endsection