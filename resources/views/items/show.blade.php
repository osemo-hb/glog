<!DOCTYPE html>
<html>
<head>
    <title>Tavaran kuvaus</title>
</head>
<body>
    <h1>{{ $item->title }}</h1>
    <p>Kategoria: {{ $item->category }}</p>
    <p>Määrä: {{ $item->quantity }} {{ $item->unit }}</p>
    @if ($item->image)
        <p><img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"></p>
    @endif
    <a href="/items/{{ $item->id }}/edit">Muokkaa</a>
    <form action="/items/{{ $item->id }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Poista</button>
    </form>
    <a href="/items">Palaa</a>
</body>
</html>
