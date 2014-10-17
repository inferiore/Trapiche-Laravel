@extends('Layaouts.master')

@section('Title')
<title>Detalles Und De Medida</title>
@stop

@section('body')

<h3>Detalles Unidad De medida</h3>
<div class="form-horizontal">
    {{Form::open(array('url'=>'unidaddemedida/editado/'.$UnidadDeMedida->GetId()))}}
    <div class="form-group">
        {{Form::Label('Nombre','Nombre',array('class' => 'control-label col-md-2'))}}
        <div class="col-md-10">    
            {{Form::text('Nombre',$UnidadDeMedida->GetNombre(),array('class' => 'text-box single-line','disabled'))}}
        </div>
    </div>
   
    <div class="form-group">
        {{Form::Label('IdEstado','Estado',array('class' => 'control-label col-md-2'))}}
        <div class="col-md-10"> 
            {{Form::select('IdEstado',$Estados,$UnidadDeMedida->GetIdEstado(),array('class' => 'text-box single-line','disabled'))}}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-10"> 
        </div>
    </div>
    {{Form::close()}}
    <p>{{ HTML::link('unidaddemedida/index','Ir a La Lista')}}</p>
</div>

@stop