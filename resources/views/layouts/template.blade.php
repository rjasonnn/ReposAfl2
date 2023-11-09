<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Arnold Gym</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>



    <div class="container-xl">

        <nav>
            <div class="nav-logo-title">
                <img alt="Logo">
                <a href="/home">Arnold Gym</a>
            </div>
            <ul>
                <li><a href="/trainers">Trainers</a></li>
                <li><a href="/challenges">Challenges</a></li>
                <li><a href="#articles">Article</a></li>
                <li><a href="#creativity">Creativity</a></li>
            </ul>
        </nav>

        @yield('content')
    </div>
</body>

</html>
