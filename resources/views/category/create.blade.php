@extends('layouts.app')

@section('title', 'crear de categorias')

@section('content')

<div class="bg-gray-50 p-5 mb-5 text-center">
    <strong class="text-xl">
        Crear categoría
    </strong>
</div>
<div class="w-96 m-auto">
    @include('errors')
    <form action="{{route('categories.store')}}" method="post">
        @csrf
        @include('category._form')
        <button
            class="w-max my-5 text-center p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300"
            type="submit" class="btn btn-primary">Crear</button>

    </form>
</div>
@endsection
