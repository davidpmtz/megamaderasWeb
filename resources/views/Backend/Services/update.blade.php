@extends('Backend.master')
@section('tittle','Servicios')  @endsection
@section('activeServices','active') @endsection
@section('css')
<link href="{{asset('Plugins/Fotos/src/css/least.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
<div class="row">
  <div class="col-xs-4">
    <p class="home"> El catálogo de servicios es una vista donde podemos realizar todas las acciones CRUD de la sección de servicios.</p>
    <div class="col-xs-12">
      <li> Create </li>
      <li> Read </li>
      <li> Update </li>
      <li> Delete </li>
    </div>
    <br>
    <p> </p>
    <p class="home">En esta vista podemos modificar los datos de un service.</p>
  </div>

<div class="col-xs-7">
  <div class="panel panel-info">
    <h1> Modificar un service </h2><br><br>
      <div class='Form'>
      <div class="form-group">
        {!! Form::open(['route' => ['admin.services.update',$service], 'method' => 'PUT']) !!}
  <div class="form-group">
  {!! Form::label('lastModify_by', 'Creado por') !!}
  {!! Form::text('lastModify_by',$service->lastModify_by,['class' => 'form-control', 'readonly' => 'readonly', 'required','hide']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('nombre', '* Nombre del service') !!}
    {!! Form::text('nombre',$service->nombre,['class' => 'form-control', 'placeholder' => 'ej: Madera de Cedro', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('precio', '* Precio') !!}
    {!! Form::text('precio',$service->precio,['class' => 'form-control', 'placeholder' => 'Precio de venta del service', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('view', '* Modo de vista') !!}
    {!! Form::select('view',['' => '[ Seleccionar ]','1' => 'Público',
                              '0' => 'Privado'],$service->view,['class' => 'form-control','required']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('descripcion', '* Descripción del service') !!}
    {!! Form::textarea('descripcion',$service->descripcion,['class' => 'form-control', 'resize' => 'none','placeholder' => 'Descripción detallada del service', 'required']) !!}
  </div>


  <div class="form-group">
    {!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}
    <a href="{{route('admin.services.index')}}" class="btn btn-info">Regresar</a>
  </div>
{!! Form::close() !!}
      </div>
      </div>
</div>
</div>
@endsection
@section('js')


@endsection
