<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/scss/app.scss', 'resources/css/app.css'])
</head>
<body>
    <section>
        <h1 class="test">Vc acessou  a home </h1>
    </section>
    <h2>{{ session()->get('user')->firstName }}</h2>

</body>
</html>