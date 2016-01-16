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

<div class='clear'></div>
<div class='clear'></div>



  <div class='sixteen columns form'>
    <h3>Déjanos un mensaje con tus datos y nosotros te contactaremos a la brevedad.</h3>
    <p>Los tiempos de respuesta varían en relación a la demanda.</p>
  </div>

  <div class='clear'></div>
  <div class='clear'></div>

  <div class='Form'>
  <div class="form-group">
    {!! Form::open(['route' => 'contacto.store', 'method' => 'POST']) !!}
    <div class="form-group">
    {!! Form::label('name', 'Usuario') !!}
    {!! Form::text('name',null,['class' => 'form-control','required','placeholder' => 'ej: María Peréz Gómez','hide']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('telephone', '*Telefono') !!}
      {!! Form::text('telephone',null,['class' => 'form-control', 'placeholder' => 'Telefono para comunicarnos...', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('email', '* Correo electrónico') !!}
      {!! Form::email('email',null,['class' => 'form-control', 'placeholder' => 'example@hotmail.com', 'required']) !!}
    </div>
    <div class="form-group">
          {!! Form::label('message', '* Mensaje') !!}
          {!! Form::textarea('message',null,['class' => 'ckeditor', 'placeholder' => 'Contenido del mensaje','required']) !!}
    </div>


    <div class="form-group">
      {!! Form::submit('Guardar',['class' => 'btn btn-success']) !!}

    </div>
  {!! Form::close() !!}
  </div>
</div>
<div class='clear'></div>

<div class="google" id="google">
  {{'WASKALLE'}}
</div>

@endsection

@section('js')
<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps -->
    <script src="//maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/helpers/gmaps.min.js"></script>
<script>
    window.onload = function(){
        var options = {
            zoom: 16
            , center: new google.maps.LatLng(20.651439, -103.3272500)
            , mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById('google'), options);

        var marcador = new google.maps.Marker({
            position: map.getCenter()
            , map: map
            , title: 'Megamaderas S.A de C.V'
            , cursor: 'default'
            , animation: google.maps.Animation.DROP

        });

        var infowindow = new google.maps.InfoWindow({ content: '<h4> << Megamaderas S.A. DE C.V. >> </h4> <p> Ven y visitamos, estamos para aclarar tus dudas.</p>' });
        infowindow.open(map, marcador);
    };
</script>
@endsection
