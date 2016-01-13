@extends('app')

@section('tittle') <h1> Contáctanos </h1> @endsection

@section('content')

<div class='one-third column'>
  <img src='images/misc/about_us.png'>
  <h3>Acerca de </h3>
  <p>Somos una empresa que se preocupa por sus clientes para mantener la satisfacción de estos
  lo más alta posible y así cumplir con sus expectativas
</p>
</div>


<div class='one-third column'>
  <img src='images/misc/team.png'>
  <h3>¿En que puedo ayudarte?</h3>
  <p>Todo el equipo de MegaMaderas esta aqui para ayudarte a resolver cualquiera de tus dudas que tengas en
    relación a nosotros, nuestros productos, nuestros servicios. </p>
</div>



<div class='one-third column'>
  <img src='images/misc/goals.png'>
  <h3>Objetivo</h3>
  <p>MegaMaderas tiene como objetivo ser la mejor empresa proveedora de maderas para todos los clientes del país.</p>
</div>

<tr>


  <div class='sixteen columns form'>
    <h3>Déjanos un mensaje con tus datos y nosotros te contactaremos a la brevedad.</h3>
    <p>Los tiempos de respuesta varían en relación a la demanda.</p>
  </div>
  <div class='Form'>
  <div class="form-group">
    {!! Form::open(['route' => 'contacto.store', 'method' => 'POST']) !!}
    <div class="form-group">
    {!! Form::label('created_by', 'Usuario') !!}
    {!! Form::text('created_by',null,['class' => 'form-control', 'readonly' => 'readonly', 'required','hide']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('telephone', '*Telefono') !!} @if($errors->any()) | <font color="red" >  {{ $errors->first('keyword') }}  </font>@endif
      {!! Form::text('telephone',null,['class' => 'form-control', 'placeholder' => 'Palabra clave para el contenido', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('email', '* Correo electrónico') !!} @if($errors->any())  | <font color="red">  {{ $errors->first('name') }} </font> @endif
      {!! Form::email('email',null,['class' => 'form-control', 'placeholder' => 'Nombre para el contenido', 'required']) !!}
    </div>
    <div class="form-group">
          {!! Form::label('message', '* Mensaje') !!} @if($errors->any()) | <font color="red">  {{ $errors->first('content') }} </font> @endif
          {!! Form::textarea('message',null,['class' => 'ckeditor', 'placeholder' => 'Contenido del cms','required']) !!}
    </div>


    <div class="form-group">
      {!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}
      <a href="{{url('/')}}" class="btn btn-info">Regresar</a>
    </div>
  {!! Form::close() !!}
  </div>
</div>

@endsection
