@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


    <p>Registra la empresa en la que tendras tu residencia</p>

    <form action="{{route("empresas.store")}}" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
        <label for='nombre'>Nombre</label>
        {{$errors->first("nombre")}}
        <input type='text' name='nombre' id='nombre' value="{{old('nombre')}}"><br>
        
        <label for='giro'>Escoge el Giro, Ramo o Sector</label> <br>
        {{$errors->first("giro")}}

        <input type='radio' name='giro' id='giro' value='industrial'>
        <label for="industrial">Industrial</label>
        <input type='radio' name='giro' id='giro' value='servicios'>
        <label for="servicios">Servicios</label> <br>
        <input type='radio' name='giro' id='giro' value='publico'>
        <label for="publico">Publico</label>
        <input type='radio' name='giro' id='giro' value='privado'>
        <label for="privado">Privado</label>
        <input type='radio' name='giro' id='giro' value='otro'>
        <label for="otro">Otro</label><br>
        
        <label for='rfc'>RFC</label>
        {{$errors->first("rfc")}}
        <input type='text' name='rfc' id='rfc' value="{{old('rfc')}}"><br>

        <label for='direccion'>Direccion</label>
        {{$errors->first("direccion")}}
        <input type='text' name='direccion' id='direccion' value="{{old('direccion')}}"><br>

        <label for='telefono'>Telefono</label>
        {{$errors->first("telefono")}}
        <input type='tel' name='telefono' id='telefono' value="{{old('telefono')}}"><br>

        <label for='correo'>Correo Electronico</label>
        {{$errors->first("correo")}}
        <input type='email' name='correo' id='correo' value="{{old('correo')}}"><br>

        <label for='titular'>Nombre del Titular de la empresa</label>
        {{$errors->first("titular")}}
        <input type='text' name='titular' id='titular' value="{{old('titular')}}"><br>

        <label for='puesto_titular'>Puesto del Titular</label>
        {{$errors->first("puesto_titular")}}
        <input type='text' name='puesto_titular' id='puesto_titular' value="{{old('puesto_titular')}}"><br>
       
        <!--<label for='asesor_externo'>Nombre del Asesor externo</label>
        {{$errors->first("asesor_externo")}}
        <input type='text' name='asesor_externo' id='asesor_externo' value="{{old('asesor_externo')}}"><br>

        <label for='puesto_asesor'>Puesto del Asesor</label>
        {{$errors->first("puesto_asesor")}}
        <input type='text' name='puesto_asesor' id='puesto_asesor' value="{{old('puesto_asesor')}}"><br>-->

        <label for='informacion'>Informacion adicional de la empresa: </label>
        {{$errors->first("informacion")}}
        <input type='text' name='informacion' id='informacion' value="{{old('informacion')}}"><br>
       
        <input type='submit'>
    </form>
    @endsection
