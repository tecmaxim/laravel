@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show scaffold_table
    </h1>
    <br>
    <form method = 'get' action = '{!!url("scaffold_table")!!}'>
        <button class = 'btn btn-primary'>scaffold_table Index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>Name : </i></b>
                </td>
                <td>{!!$scaffold_table->Name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>born : </i></b>
                </td>
                <td>{!!$scaffold_table->born!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>isActive : </i></b>
                </td>
                <td>{!!$scaffold_table->isActive!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection