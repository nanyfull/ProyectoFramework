@extends('layouts.app')

@section('title', $category['name'])

@section('content')

<div class="bg-gray-50 p-5 mb-5 text-center">
    <strong class="text-xl">Visualizar categoría</strong>
</div>
<div class="w-96 m-auto bg-gray-50 p-5">
    <strong>nombre</strong>: {{$category['name']}} <br>
    <strong>Descripcion</strong>: {{$category['description']}}
</div>
@endsection
