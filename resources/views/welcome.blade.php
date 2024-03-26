<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenimente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Evenimente</h1>
        <div class="events">
        </div>
        <hr>
        <h2>Adaugă Eveniment Nou</h2>
        <form id="eventForm">
            <div class="form-group">
                <label for="eventName">Nume Eveniment:</label>
                <input type="text" class="form-control" id="eventName" required>
            </div>
            <div class="form-group">
                <label for="eventDate">Data Evenimentului:</label>
                <input type="date" class="form-control" id="eventDate" required>
            </div>
            <button type="submit" class="btn btn-primary">Adaugă Eveniment</button>
        </form>
    </div>

    <script src="app.js"></script>
</body>
</html>