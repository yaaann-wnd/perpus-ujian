<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($data as $d)
    <h1>{{ $d->nama_kelas }}</h1>
    @endforeach

    <a href="{{ route('logout') }}" onclick="
                        event.preventDefault();
                        document.getElementById('logout-form').submit();
                    ">Logout</a>
    <form action="{{ route('logout') }}" id="logout-form" method="post">
        @csrf
    </form>
</body>
</html>
