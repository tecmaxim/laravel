@extends('layouts.admin')
	@section('content')
		{!!Form::model($user,['route'=>['user.update',$user],'method'=>'PUT'])!!}
                    @include('user.forms.form-user')
                {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
                {!!Form::close()!!}
                
                {!!Form::open(['route'=>['user.destroy', $user], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection