@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4 text-blue-500">Kategoriassa: {{ $category }}</h1>
<a href="/items" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back to All Items</a>
<ul class="mt-4">
    @foreach ($items as $item)
        <li class="mb-2">
            <div class="flex justify-between items-center bg-white p-4 rounded shadow">
                <div class="w-16 h-16 overflow-hidden rounded">
                    <img src="{{ $item->image ? asset('storage/' . $item->image) : 'https://via.placeholder.com/150' }}" alt="{{ $item->title }}" class="object-contain w-full h-full">
                </div>
                <div class="flex-grow ml-4">
                    <span class="block font-bold">{{ $item->title }}</span>
                    <span class="block text-gray-600">{{ $item->category }}</span>
                    <span class="block text-gray-600">{{ $item->quantity }} {{ $item->unit }}</span>
                    <span class="block text-gray-600 text-sm">{{ $item->created_at->format('d.m.Y') }}</span>
                </div>
                <div>
                    <a href="/items/{{ $item->id }}/edit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Muokkaa</a>
                    <form action="/items/{{ $item->id }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Poista</button>
                    </form>
                </div>
            </div>
        </li>
    @endforeach
</ul>
@endsection
