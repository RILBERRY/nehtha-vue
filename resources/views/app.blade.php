<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Dashboard </title>
    <link href="fsicon.ico" rel="icon">
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app" v-cloak></div>
</body>

</html>
