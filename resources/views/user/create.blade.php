@extends('layouts.admin')
	@section('content')
         @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
	{!!Form::open(['route'=>'user.store', 'method'=>'POST'])!!}
            @include('user.forms.form-user')
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
        
       
	@endsection