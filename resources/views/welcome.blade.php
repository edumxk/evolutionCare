<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap w/ Webpack</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container py-4 px-3 mx-auto">
    <h1>Hello, Bootstrap and Webpack!</h1>
    <button class="btn btn-primary">Primary button</button>
    <button class="btn btn-danger">Danger button</button>
    <button class="btn btn-info">Info button</button>
</div>
<script src="./main.js"></script>
</body>
</html>
