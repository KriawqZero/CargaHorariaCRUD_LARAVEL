<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='refresh' content="{{ config('session.lifetime') * 60 }}">
    <link rel="icon" href="{{url('assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{url('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.css')}}">
    <title>@yield('title') - IFMS</title>
</head>
<body>
    <main>
        @yield("loginMain")
    </main>

    <script src="{{url('assets/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>
