<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenimente</title>
</head>
<body>
    <h1>Lista Evenimentelor</h1>
    <ul>
        @foreach ($events as $event)
            <li>
                <h2>{{ $event->title }}</h2>
                <p>{{ $event->description }}</p>
                <p>Data: {{ $event->date }} | Locația: {{ $event->location }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
