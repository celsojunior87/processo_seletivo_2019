<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<html class="no-js lt-ie9"> <![endif]-->
<html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Desafio - 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content=""/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="robots" content="index, follow"/>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="css/geral.css">
    <script type="text/javascript" src="selectivizr.js"></script>
    <noscript>
        <link rel="stylesheet" href="[fallback css]"/>
    </noscript>
</head>
<body>
<section class="conteudo-internas">
    <div class="centraliza">
        <div class="conteudo-esquerda">
            <div class="lista">
                <form  method="get" action="{{ route('noticias') }}" class="form-group row">
                    <div class="col-12 busca">
                        <input name="pesquisa" type="text" class="form-control col-8" placeholder="Digite sua busca">
                        <button type="submit" class="btn btn-primary col-2"> Buscar</button>
                    </div>
                </form>
                <div class="container">
                @foreach($noticias as $key => $noticia)
                    <article class="box-noticia">
                        <a href="{{$noticia->url}}">
                            <figure>
                                <img src="{{$noticia->imagem}}" alt="" >
                            </figure>
                            <div class="texto-lista-noticias">
                                <span class="data-lista-noticia">{{$noticia->data_formatada}}</span>
                                <h1>{{$noticia->titulo}}</h1>
                                <p>{!!mb_strimwidth(strip_tags($noticia->texto),0,300,'...')!!}</p>
                            </div>
                        </a>
                    </article>
                @endforeach
                <hr>

                <div>
                    {{ $noticias->links() }}
                </div>
                <hr>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
</script>
</body>
</html>
