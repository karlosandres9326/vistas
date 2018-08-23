@extends('layouts.app')
@section('title', 'Page Title')
@section('sidebar')
@parent
<p>This is appended to the master sidebar.</p>
<h1> Hola mundo </h1>
@endsection
@section('content')
<p>This is my body content.</p>
@for ($i = 0; $i < 10; $i++)
El valor actual es {{ $i }}
@endfor



@endsection

@if($age >=18 )
<h1>Eres mayor de edad</h1>
@elseif ($age >=10 && $age <= 15)
<h1>No tienes la edad suficiente</h1>
@else
<h1>Eres menor de edad </h1>
@endif
