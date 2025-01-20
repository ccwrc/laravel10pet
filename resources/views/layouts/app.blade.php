<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Layouts</title>

</head>
<body class="antialiased">
<h1>Petstore</h1>
@yield('content')
@if($errors->any())
    <div>
        @foreach($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    </div>
@endif
</body>
</html>
