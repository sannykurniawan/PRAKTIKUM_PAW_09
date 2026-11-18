<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Route</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        <h1>This is from View Route</h1>
        <p>Hello, My name is {{ $name }}</p>
    </div>
    <a href="{{ url('/view_route') }}" class="list-group-item list-group-item-action">
        View Route
    </a>

    @vite('resources/js/app.js')
</body>
</html>
