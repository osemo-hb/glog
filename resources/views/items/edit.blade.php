@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Muokkaa tavaraa</h1>
<form action="/items/{{ $item->id }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Nimi:</label>
        <input type="text" name="title" id="title" value="{{ $item->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Kategoria:</label>
        <input type="text" name="category" id="category" value="{{ $item->category }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Määrä:</label>
        <input type="number" name="quantity" id="quantity" value="{{ $item->quantity }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label for="unit" class="block text-gray-700 text-sm font-bold mb-2">Yksikkö:</label>
        <select name="unit" id="unit" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <option value="g" {{ $item->unit == 'grams' ? 'selected' : '' }}>grammaa</option>
            <option value="ml" {{ $item->unit == 'milliliters' ? 'selected' : '' }}>millilitraa</option>
            <option value="kpl" {{ $item->unit == 'units' ? 'selected' : '' }}>kappaletta</option>
        </select>
    </div>
    <div class="mb-4">
        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Kuva:</label>
        <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Päivitä</button>
    </div>
</form>
@endsection