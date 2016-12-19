@extends('layouts.admin')
        @include('alerts.success')
        @include('alerts.errors')
	@section('content')
         
	{!!Form::open(['route'=>'user.store', 'method'=>'POST'])!!}
            @include('user.forms.form-user')
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
        
       
	@endsection