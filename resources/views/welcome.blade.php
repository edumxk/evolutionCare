<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container-fluid bg-dark">
    <x-header></x-header>
</div>
<div class="container vw-100 p-5">
    <button class="btn btn-success">Bootstrap ON</button>
</div>

<script src="./main.js"></script>
</body>
</html>
