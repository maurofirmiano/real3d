<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Real3D Impressões</title>
</head>

<body>
<header>
    <div id="title">
        <h1> Impressão</h1>
        <h1> 3D</h1>
    </div>
    <ul>
        <a href="{{route('site.home.index')}}">
            <li>Início</li>
        </a>
        <a href="{{route('site.servico.index')}}">
            <li>Serviços</li>
        </a>
        <a href="{{route('site.sobre.index')}}">
            <li>Sobre</li>
        </a>
        <a href="{{route('site.contato.index')}}">
            <li>Contato</li>
        </a>
        <a href="#" id="btnInscreva">
            <li>Já tem uma conta?</li>
        </a>
    </ul>
</header>
<main>
    <aside>
        <h2><span> Inscreva-se agora </span></h2>
        <h2>na Newslatter</h2>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard
            dummy text ever since the 1500s
        </p>
        <form method="post" action="">
            @csrf
            <input type="text" name="nome" placeholder="Nome">
            <input type="email" name="email" placeholder="Email">
            <input type="submit" value="Enviar ">
        </form>
    </aside>
    <article>
        <img src="./components/images/Real3d3.png" alt="imagem">
    </article>
</main>
</body>

</html>
