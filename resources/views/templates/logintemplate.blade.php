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

    <script>
        const input = document.getElementById("cpfForm");
        input.addEventListener('keypress', () => {
            let inputlength = input.value.length;

            if (inputlength === 3 || inputlength === 7) input.value += '.';
            if (inputlength === 11) input.value += '-';
        });

        const input_nasc = document.getElementById('datanasc');
        input_nasc.addEventListener('keypress', () => {
            let inputlength_nasc = input_nasc.value.length;

            if (inputlength_nasc === 2 || inputlength_nasc === 5) input_nasc.value += '/';
        })

    </script>

    <script src="{{url('assets/bootstrap/js/bootstrap.js')}}"></script>
</body>

</html>
