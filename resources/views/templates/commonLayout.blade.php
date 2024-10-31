<html>
<head data-bs-theme-mode="dark">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='refresh' content="{{ config('session.lifetime') * 60 }}">
    <link rel="icon" href="{{url('assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.css')}}">
    <!--link rel="stylesheet" href="{//{url('assets/css/common.css')}}"-->
    <link rel="stylesheet" href="{{url('assets/css/site.css')}}">
    <title>@yield('title') - IFMS</title>
</head>
<body>

    @include('Home.Header.headerPadrao')
    <div>
        <main>
            @yield('content')
        </main>
    </div>


    <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
