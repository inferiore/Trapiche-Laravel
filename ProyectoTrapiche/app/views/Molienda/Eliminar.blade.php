@extends('Layaouts.master')

@section('Title')
<title>Eliminar Molienda</title>
@stop

@section('body')

<h3>Eliminar Molienda</h3>
<p>Esta Seguro de eliminar Esta Molienda?</p>
<div class="form-horizontal">
    {{Form::open(array('url'=>'molienda/eliminado/'.$Molienda->GetId()))}}
    <div class="form-group">
        {{Form::Label('GrnComents','Comentarios',array('class' => 'control-label col-md-2'))}}
        <div class="col-md-10"> 
            {{Form::textarea('GrnComents',$Molienda->GetComentarios(),array('cols'=>'20','rows'=>'4','disabled'))}}
        </div>
    </div>


    <div class="form-group">
        {{Form::Label('GrnIdUnitMeasurement','Unidad de Medida',array('class' => 'control-label col-md-2'))}}
        <div class="col-md-10"> 
            {{Form::select('GrnIdUnitMeasurement',$Datos["UnidadDeMedida"],$Molienda->GetIdUnidadDeMedida(),$Datos["Attr"])}}
        </div>
    </div>

    <div class="form-group">
        {{Form::Label('GrnTotal','Total en Kg',array('class' => 'control-label col-md-2'))}}
        <div class="col-md-10"> 
            {{Form::input('number','GrnTotal',$Molienda->GetTotalEnKg(),$Datos["Attr"])}}
        </div>
    </div>


    <div class="form-group">
        {{Form::Label('GrnFactoryPrice','Precio Base',array('class' => 'control-label col-md-2'))}}
        <div class="col-md-10"> 
            {{Form::input('number','GrnFactoryPrice',$Molienda->GetPrecioBase(),$Datos["Attr"])}}
        </div>
    </div>

    <div class="form-group">
        {{Form::Label('GrnDateLiquidation','Fecha Liquidacion',array('class' => 'control-label col-md-2'))}}
        <div class="col-md-10"> 
            {{Form::input('date','GrnDateLiquidation',$Molienda->GetFechaLiquidacion(),$Datos["Attr"])}}
        </div>
    </div>
    <div class="form-group">
        {{Form::Label('GrnSellByDate','Fecha de Cierre',array('class' => 'control-label col-md-2'))}}
        <div class="col-md-10"> 
            {{Form::input('date','GrnSellByDate',$Molienda->GetFechaDeCierre(),$Datos["Attr"])}}
        </div>
    </div>

    <div class="form-group">
        {{Form::Label('GrnDateLaunch','Fecha de Apertura',array('class' => 'control-la  bel col-md-2'))}}
        <div class="col-md-10"> 
            {{Form::input('date','GrnDateLaunch',$Molienda->GetFechaDeApertura(),$Datos["Attr"])}}
        </div>
    </div>

    <div class="form-group">
        {{Form::Label('GrnIdTrapiche','Trapiche',array('class' => 'control-label col-md-2'))}}
        <div class="col-md-10"> 
            {{Form::select('GrnIdTrapiche',$Datos["Trapiches"],$Molienda->GetIdTrapiche(),$Datos["Attr"])}}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10"> 
            {{Form::submit('Eliminar',array('class'=>'btn btn-danger'))}}
        </div>
    </div>
    <p>{{ HTML::link('molienda/index','Ir a La Lista')}}</p>
    {{Form::close()}}
</div>
@stop