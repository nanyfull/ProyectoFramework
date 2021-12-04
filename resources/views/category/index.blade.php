@extends('layouts.app')

@section('title', 'listado de categorias')

@section('content')
<div class="bg-gray-50 p-10 mb-10">
    <a href="{{route('categories.create')}}"
     class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300 text-center">
     Agregar
    </a>
</div>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-900 text-white">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Id
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Categoria
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Creación
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Actualización
                </th>
                <th scope="col" class="relative px-6 py-3">
                 Acciones
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($categories as $category)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$category['id']}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$category['name']}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$category['created_at']}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{$category['updated_at']}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-between">
                      <a href="{{route('categories.show',$category['id'])}}" class="p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300">Ver</a>

                      <a href="{{route('categories.edit',$category['id'])}}" class="p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300">Actualizar</a>

                      <form :id="'delete-form'.$category['id']" method="POST" action="{{route('categories.destroy',$category['id'])}}" >
                        @csrf
                        @method('DELETE')
                          <input type="submit" class="p-2 pl-5 pr-5 bg-transparent border-2 border-red-500 text-red-500 text-lg rounded-lg hover:bg-red-500 hover:text-gray-100 focus:border-4 focus:border-red-300" value="Eliminar">

                      </form>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
