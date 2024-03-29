<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<meta name="viewport" content="width=1200, initial-scale=1, maximum-scale=1"> -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Home | Kecamatan Rappocini</title>
    </head>
    <body>
        @include('inc.navbar')
        @yield('content')
        @include('inc.footer')
    </body>
    <script src="https://kit.fontawesome.com/a996691b8a.js" crossorigin="anonymous"></script>
</html>