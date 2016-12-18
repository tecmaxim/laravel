@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Scaffold_table Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("scaffold_table")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New scaffold_table</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>Name</th>
            <th>born</th>
            <th>isActive</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($scaffold_tables as $scaffold_table) 
            <tr>
                <td>{!!$scaffold_table->Name!!}</td>
                <td>{!!$scaffold_table->born!!}</td>
                <td>{!!$scaffold_table->isActive!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/scaffold_table/{!!$scaffold_table->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/scaffold_table/{!!$scaffold_table->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/scaffold_table/{!!$scaffold_table->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $scaffold_tables->render() !!}

</section>
@endsection