<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="flex place-items-center h-screen">

<div class="max-w-7xl mx-auto rounded-2xl grid grid-cols-2 gap-8 py-8">
    <a href="/register" class="dashboard">
        <img class="dashboard-icons" src="{{asset('img/client.png')}}" alt="">
        <p>cadastrar usuário</p>
    </a>

    <a href="/{{ route('login') }}" class="dashboard">
        <img class="dashboard-icons" src="{{asset('img/client.png')}}" alt="">
        <p>logar</p>
    </a>
</div>
</form>
</body>
</html>
