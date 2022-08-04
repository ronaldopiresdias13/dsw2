<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env("APP_NAME") }}</title>
</head>
<body>

    <div id="container">
        <header>
            <h1>Cabeçalho da Pagina AQUI!</h1>
        </header>
        <nav>
            <h3>Barra de navegação!</h3>
        </nav>
        <div id="content" style="background-color: beige; min-height: 300px;">
            @yield('content')
        </div>
        <footer>
            <small>Rodapé da pagina!!!</small>
        </footer>
    </div>

</body>
</html>
