<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <form action="{{route('users.store')}}"method=POST novalidate>
        @csrf
        @include('users.partials.form')
    </form>
</body>
</html>