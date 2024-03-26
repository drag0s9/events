<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă un Eveniment Nou</title>
</head>
<body>
    <h1>Adaugă un Eveniment Nou</h1>
    
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <label for="title">Titlu:</label><br>
        <input type="text" id="title" name="title" required><br>
        
        <label for="description">Descriere:</label><br>
        <textarea id="description" name="description"></textarea><br>
        
        <label for="date">Data:</label><br>
        <input type="date" id="date" name="date" required><br>
        
        <label for="location">Locație:</label><br>
        <input type="text" id="location" name="location" required><br>
        
        <input type="submit" value="Adaugă Eveniment">
    </form>
</body>
</html>
