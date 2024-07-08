<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | show</title>
</head>
<body>
    <h1>Aquí se mostrará el posts {{$post}}</h1>
</body>
</html>

<!--CONDICIONAL IF-->
@if ()
    
@endif

<!--CONDICIONAL IFELSE-->
@if (true)
    
@else
    
@endif

<!--DIRECTIVA SWITCH-->
@switch($type)
    @case(1)
        
        @break
    @case(2)
        
        @break
    @default
        
@endswitch

<!--CÓDIGO PHP-->
@php
    
@endphp

<!--DIRECTIVA FOREACH-->
@foreach ($collection as $item)
    
@endforeach
