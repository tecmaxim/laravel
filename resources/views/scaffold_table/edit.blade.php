@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit scaffold_table
    </h1>
    <form method = 'get' action = '{!!url("scaffold_table")!!}'>
        <button class = 'btn btn-danger'>scaffold_table Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("scaffold_table")!!}/{!!$scaffold_table->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="Name">Name</label>
            <input id="Name" name = "Name" type="text" class="form-control" value="{!!$scaffold_table->
            Name!!}"> 
        </div>
        <div class="form-group">
            <label for="born">born</label>
            <input id="born" name = "born" type="text" class="form-control" value="{!!$scaffold_table->
            born!!}"> 
        </div>
        <div class="form-group">
            <label for="isActive">isActive</label>
            <input id="isActive" name = "isActive" type="text" class="form-control" value="{!!$scaffold_table->
            isActive!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection