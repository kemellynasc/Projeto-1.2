<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">

    <!-- icomoon -->
    <link rel="stylesheet" href="public/fonts/icomoon/icomoon.css">

    <!-- meu css -->


    <?php

    $pagina = isset($_GET["pg"]);
    if ($pagina) {
        switch ($_GET["pg"]) {
            case 'dailyhoroscope':
                echo '<link rel="stylesheet" href="public/css/horoscopocss.css">';
                break;

                case 'templantes':
                echo '<link rel="stylesheet" href="public/css/templantes.css">';
                break;

                case 'inicial':
                echo '<link rel="stylesheet" href="public/css/meucss.css">';
                break;
                case 'musicas':
                echo '<link rel="stylesheet" href="public/css/meucss.css">';
                break;
                case 'cadastro':
                echo '<link rel="stylesheet" href="public/css/meucss.css">';
                break;
                case 'sobre':
                echo '<link rel="stylesheet" href="public/css/sobre.css">';
                break;
                case 'noticias':
                echo '<link rel="stylesheet" href="public/css/noticias.css">';
                break;
                case 'wallpaper':
                echo '<link rel="stylesheet" href="public/css/wallpaper.css">';
                break;

            default:
                # code...
                break;
        }
    } else {
        echo '<link rel="stylesheet" href="public/css/meucss.css">';
    }
    ?>

    <title>Gossip Girl's</title>
</head>

<body>

    <header class="text-center" style="color: antiquewhite;">
        <br>
        <br>
        <h1>Gossip Girl's</h1>
        <br>
        <br>


        <nav class="navbar navbar-expand-lg navbar">

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  btn-outline-secondary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="Mila-profile-female" style="color: rgb(255, 55, 161);"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Perfil</a>
                            <a class="dropdown-item" href="?pg=cadastro">Cadastrar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Visitante</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link btn-outline-secondary" href="?pg=inicial">Home <span class="sr-only">(página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  btn-outline-secondary" href="?pg=sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#"></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control  btn-outline-secondary mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
    </header>