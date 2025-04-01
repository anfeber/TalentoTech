<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debes de iniciar sesión");
                window.location ="index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="img/miguel.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">"
</head>
<body>
    <header>
        <nav>
            <a href="bienvenida.php">Inicio</a>
            <a href="/Proyecto1_Energia/Portada/portafolio.html">Portafolio</a>
            <a href="/Proyecto1_Energia/Calculadora/calculadora.html">Calculadora</a>
            <a href="/Proyecto1_Energia/Encuesta/encuesta.html">Encuesta</a>
            <a href="php/cerrar_sesion.php">Cerrar sesión</a>
        </nav>
        <section class="textos-header">
            <h1>Arquitectura en la Nube</h1>
            <h2>Bootcamp Nivel Innovador</h2>
        </section>
        <div class ="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-1.97,26.16 C149.99,150.00 301.63,-96.19 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #08f;"></path></svg></div>
    </header>
    <main>
        <section class="contenedor sobre nosotros">
            <h2 class="titulo">Nuestro servicio</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/curriculo.jpg" alt="" style="width: 250px; height: 400px;">
                <div class="contenedor-textos">
                    <h3> _<span> 1</span>Portafolio 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, atque consectetur odio pariatur blanditiis hic velit? Consectetur magni beatae laboriosam exercitationem facilis fugit. Voluptatibus molestias vero numquam culpa maxime corporis.</p>
                    <h3> _<span> 2</span>Portafolio 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, atque consectetur odio pariatur blanditiis hic velit? Consectetur magni beatae laboriosam exercitationem facilis fugit. Voluptatibus molestias vero numquam culpa maxime corporis.</p>    
                </div>  
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                            <img src="img/imag1.jpeg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png">
                                <p>Programación en Python</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/imag2.jpeg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png">
                                <p>Gestión en proyectos</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/imag4.jpeg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png">
                                <p>Matemáticas</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/imag5.jpeg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png">
                                <p>Física</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/imag8.jpeg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png">
                                <p>Lógica de programación</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/imag6.jpeg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png">
                                <p>Interpretación Requerimiento</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/imag7.jpeg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png">
                                <p>Base de datos</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="img/imag3.jpeg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png">
                                <p>Desarrollo Web</p>
                            </div>
                        </div>
                    </div>

            </div>
        </section>
        <div class="cliente contenedor">
            <h2 class="titulo">Que dice nuestros clientes</h2>
            <div class="servicio-cont">
                <div class="servicio-ind">
                    <img src="img/ilustracion1.svg">
                    <h3>Name</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo explicabo libero dolore beatae labore veniam ut corporis impedit tenetur, laboriosam voluptates perferendis iure a quod deserunt, aliquid nihil veritatis odit!</p>
                </div>
                <div class="servicio-ind">
                    <img src="img/ilustracion2.svg">
                    <h3>Name</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo explicabo libero dolore beatae labore veniam ut corporis impedit tenetur, laboriosam voluptates perferendis iure a quod deserunt, aliquid nihil veritatis odit!</p>
                </div>
                <div class="servicio-ind">
                    <img src="img/ilustracion3.svg">
                    <h3>Name</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo explicabo libero dolore beatae labore veniam ut corporis impedit tenetur, laboriosam voluptates perferendis iure a quod deserunt, aliquid nihil veritatis odit!</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>8293245</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>8293245</p>
            </div>
            <div class="content-foo">
                <h4>Location</h4>
                <p>8293245</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy;.MiguelPJ Design | Miguel Hurtado </div>
    </footer>
</body>
</html>

