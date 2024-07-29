<!DOCTYPE html>
<html>
<head>
    <title>Tavarat kaapissa</title>
</head>
<body>
    <h1>Tavarat</h1>
    <a href="/items/create">Lisää uusi</a>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item->title }} ({{ $item->quantity }} {{ $item->unit }})
                <a href="/items/{{ $item->id }}/edit">Muokkaa</a>
                <form action="/items/{{ $item->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Poista</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
