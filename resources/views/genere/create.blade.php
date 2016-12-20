@extends('layouts.admin')
@section('content')
<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    <strong> Genero Agregado Correctamente.</strong>
</div>

    {!!Form::open()!!}
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        @include('genere.forms.genere')
        {{link_to('#', $title='Registrar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $secure = null)}}
    {!!Form::close()!!}
    
    {!!Html::script('js/script.js')!!}
    
@endsection