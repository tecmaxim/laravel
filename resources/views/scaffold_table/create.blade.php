@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create scaffold_table
    </h1>
    <form method = 'get' action = '{!!url("scaffold_table")!!}'>
        <button class = 'btn btn-danger'>scaffold_table Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("scaffold_table")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="Name">Name</label>
            <input id="Name" name = "Name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="born">born</label>
            <input id="born" name = "born" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="isActive">isActive</label>
            <input id="isActive" name = "isActive" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection