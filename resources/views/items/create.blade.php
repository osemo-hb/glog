<!DOCTYPE html>
<html>
<head>
    <title>Lisää uusi tavara</title>
</head>
<body>
    <h1>Lisää uusi</h1>
    <form action="/items" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Nimike:</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="category">Kategoria:</label>
        <input type="text" name="category" id="category">
        <br>
        <label for="quantity">Määrä:</label>
        <input type="number" name="quantity" id="quantity">
        <br>
        <label for="unit">Määrän yksikkö:</label>
        <select name="unit" id="unit">
            <option value="grammaa">g</option>
            <option value="millilitraa">ml</option>
            <option value="kpl">yksikköä</option>
        </select>
        <br>
        <label for="image">Kuva:</label>
        <input type="file" name="image" id="image">
        <br>
        <button type="submit">Lisää tavara</button>
    </form>
</body>
</html>
