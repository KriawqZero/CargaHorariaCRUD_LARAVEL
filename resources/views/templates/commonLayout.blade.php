<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='refresh' content="{{ config('session.lifetime') * 60 }}">
    <link rel="icon" href="{{url('assets/images/favicon.ico')}}">
    <title>@yield('title') - IFMS</title>
</head>
<body>
    <main>
        @yield('content')
    </main>

    <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
