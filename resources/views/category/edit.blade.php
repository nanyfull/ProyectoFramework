@extends('layouts.app')

@section('title', 'editar de categorias')

@section('content')

<div class="bg-gray-50 p-5 mb-5 text-center">
    <strong class="text-xl">Editar categoría</strong>
</div>

<div class="w-96 m-auto">
    @include('errors')
    <form action="{{route('categories.update',$category->id)}}" method="post">
        @csrf
        @method('PATCH')
        @include('category._form')
        <button
            class="w-max my-5 text-center p-2 pl-5 pr-5 bg-yellow-500 text-gray-100 text-lg rounded-lg focus:border-4 yellow-blue-300"
            type="submit" class="btn btn-primary">Editar</button>

    </form>
</div>
@endsection
