<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projeto Integrado IV</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        header{
            display: flex;
            background-color: rgb(52,52,52);
            width: 100%;
            align-items: center;
            justify-content: space-between;
        }

        nav{
            display: flex;
            width: 50%;
            height: 100px;
            align-items: center;
        }

        li {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            margin-right: 10px;
            background-color: rgb(27,27,27);
            border-radius: 10px;
            width: fit-content;
            padding: 10px;
            height: 30px;
            border: solid 2px rgb(247,247,247);
            font-family: 'Roboto', sans-serif;
        }

        a {
            text-decoration: none;
            color: rgb(247,247,247);
            text-align: center;
        }

        h1{
            font-family: 'Bebas Neue', sans-serif;
            color: rgb(247,247,247);
            margin-left: 10px;
        }
    </style>
</head>

<body class="antialiased">
    <header>
        <h1>Projeto Integrado IV</h1>

        <nav>
            <li>
                <a href="https://laravel.com/docs/10.x" target="_blank">Laravel Documentation</a>
            </li>
            <li>
                <a href="https://www.php.net/docs.php" target="_blank">PHP documentation</a>
            </li>
            <li>
                <a href="https://getcomposer.org/download/" target="_blank">Composer donwload</a>
            </li>
            <li>
                <a href="https://github.com/LeoCosta-dev/ProjetoIntegradoIV" target="_blank">Repository this project</a>
            </li>
        </nav>
    </header>
</body>

</html>