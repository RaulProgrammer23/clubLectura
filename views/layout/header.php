<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css">
    <title>Club de lectura</title>
</head>
<body>

    <video autoplay muted loop id="background-video">
        <source src="ruta_del_video.mp4" type="video/mp4">
        Tu navegador no soporta el formato de video.
    </video>

    <header>
        <h1 class="titulo">CLUB DE LECTURA</h1>
        <nav>
            <?php if( !isset($_SESSION['logged'])): ?>
                <a href="<?=base_url?>user/login">Iniciar sesion</a>
                <a href="<?=base_url?>user/registrar">Registro</a>
            <?php else:?>
                <a href="<?=base_url?>user/logout">Cerrar sesión</a>
            <?php endif;?>
            <?php if( isset($_SESSION['admin'])):?>
                <a href="<?=base_url?>book/createBook">Nuevo libro</a>
                <a href="<?=base_url?>categorie/createCategory">Nueva categoria</a>
            <?php endif;?>
        </nav>
    </header>


    <div class="layout_content">
        <h1 class="content__title">
            {🎲📚}
        </h1>
    </div>

    <div class="content">