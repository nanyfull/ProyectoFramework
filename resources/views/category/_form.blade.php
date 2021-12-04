<div class="form-group">
    <label class="block text-gray-700 text-sm font-normal mb-2">Nombre</label>
    <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        type="text" id="name" name="name" value="{{old('name',$category->name)}}" required">
</div>
<div class="form-group">
    <label class="block text-gray-700 text-sm font-normal mb-2" for="description">Description</label>
    <textarea
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        name="description">{{ old('description',$category->description) }}</textarea>
</div>

