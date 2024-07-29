<!DOCTYPE html>
<html>
<head>
    <title>Muokkaa tavaraa</title>
</head>
<body>
    <h1>Muokkaa</h1>
    <form action="/items/{{ $item->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">Nimike:</label>
        <input type="text" name="title" id="title" value="{{ $item->title }}">
        <br>
        <label for="category">Kategoria:</label>
        <input type="text" name="category" id="category" value="{{ $item->category }}">
        <br>
        <label for="quantity">Määrä:</label>
        <input type="number" name="quantity" id="quantity" value="{{ $item->quantity }}">
        <br>
        <label for="unit">Määrän yksikkö:</label>
        <select name="unit" id="unit">
            <option value="grams" {{ $item->unit == 'grams' ? 'selected' : '' }}>grams</option>
            <option value="milliliters" {{ $item->unit == 'milliliters' ? 'selected' : '' }}>milliliters</option>
            <option value="units" {{ $item->unit == 'units' ? 'selected' : '' }}>units</option>
        </select>
        <br>
        <label for="image">Kuva:</label>
        <input type="file" name="image" id="image">
        <br>
        <button type="submit">Päivitä</button>
    </form>
</body>
</html>
