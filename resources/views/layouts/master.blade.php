<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Broadcast Example</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ mix("css/app.css") }}" rel="stylesheet">
    <meta name="google" value="notranslate">
    <!--Needed for Laravel Echo-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
@yield('content')

<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<script src="{{ mix("js/app.js") }}"></script>
</body>
</html>