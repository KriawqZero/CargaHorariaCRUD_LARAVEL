<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='refresh' content="{{ config('session.lifetime') * 60 }}">
    <title>Document</title>
</head>
<body>
LOGADO {{Auth::user()->nome}}
    <form action="{{route('login.deslogar')}}" method="POST">
        @csrf
        <button type="submit">Deslogar</button>
    </form>
</body>
</html>
