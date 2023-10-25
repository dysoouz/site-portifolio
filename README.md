<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
    <title>PORTIFÓLIO DNL</title>
</head>
<body>
    <header>
        <div class="interface">
            <div class="logo">
                <a href="#">
                    <img src="images/logo.png" alt="Logo DNL">
                </a>
            </div><!--logo-->

            <nav class="menu-desktop">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Especialidades</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Projetos</a></li>
                </ul>
            </nav>
    
            <div class="DNL-contato">
                <a href="#">
                    <button>Contato</button>
                </a>
            </div>
        </div><!--interface-->
    </header>

    <main>
        <section class="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="txt_topo_site">
                        <h1>ESTUDANDE DE CIÊNCIAS DA COMPUTAÇÃO<span>.</span></h1>
                        <p> Acredito que a criatividade e a inovação caminham juntas. 
                            Com minhas ideias únicas e uma abordagem inovadora, estou 
                            pronto(a) para criar a presença online que você sempre desejou, 
                            com um design impactante, funcionalidade simples de usar e 
                            foco em alcançar os resultados que você espera.
                        </p>

                        <div class="DNL-contato">
                            <a href="#">
                                <button>Entre em Contato</button>
                            </a>
                        </div>
                    </div><!--txt_topo_site-->

                    <div class="img_topo_site">
                        <img src="images/danilo1.png" alt="">
                    </div><!--img_topo_site-->

                </div><!--flex-->

            </div><!--interface-->
        </section><!--topo-do-site-->

        <section class="especialidades">
            <div class="interface">
                <h2 class="titulo">MINHAS <span>ESPECIALIDADES.</span></h2>
                <div class="flex">
                    <div class="especialidades_box">
                        <i class="bi bi-file-code-fill"></i>
                        <h3>Trabalhando nisso</h3>
                        <p>Ainda não tenho uma especialidade especifica... </p>
                    </div>
                    <!--<div class="especialidades_box">
                        <i class="bi bi-cart-fill"></i>
                        <h3>Equipe</h3>
                        <p>mó pregiça mó pregiça mó pregiça mó pregiça mó pregiça
                            mó pregiça mó pregiça mó pregiça mó pregiça mó pregiça</p>
                    </div>
                    <div class="especialidades_box">
                        <i class="bi bi-archive-fill"></i>
                        <h3>Box</h3>
                        <p>mó pregiça mó pregiça mó pregiça mó pregiça mó pregiça
                            mó pregiça mó pregiça mó pregiça mó pregiça mó pregiça</p>
                    </div>-->
                </div><!--flex-->
            </div><!--interface-->
        </section><!--especialidades-->

        <section class="sobre">
            <div class="interface">
                <div class="flex">
                    <div class="img_sobre">
                        <img src="images/baby_danilo.jpg" alt="">
                    </div><!--img_sobre-->

                    <div class="txt_sobre">
                        <h2>MUITO PRAZER, <span>SOU DANILO SOUZA.</span></h2>
                        <p> um texto legal sobre mim um texto legal sobre mim um texto legal sobre mim
                            um texto legal sobre mim um texto legal sobre mim um texto legal sobre mim.</p>
                        <p> um texto legal sobre mim um texto legal sobre mim um texto legal sobre mim
                            um texto legal sobre mim um texto legal sobre mim um texto legal sobre mim.</p>
                        <div class="btn_social">
                            <a href="https://www.instagram.com/didi.souza44/"><button><i class="bi bi-instagram"></i></button></a>
                            <a href="https://github.com/dysoouz"><button><i class="bi bi-github"></i></button></a>
                            <a href="#"><button><i class="bi bi-linkedin"></i></button></i></a>
                        </div>

                    </div><!--txt_sobre-->
                </div><!--flex-->
            </div><!--interface-->
        </section><!--sobre-->

        <section class="portifolio">
            <div class="interface">
                <h2 class="titulo">MEUS <span>PORTIFÓLIO.</span></h2>
                <div class="flex">
                    <div class="img_port" style="background-image: url(images/jdf.png);">
                        <div class="overlay">Jogo da Forca</div>
                    </div>
                    <div class="img_port" style="background-image: url(images/ru.png);">
                        <div class="overlay">Gerenciador de Cardápio</div>
                    </div>
                    <div class="img_port" style="background-image: url(images/ca.png);">
                        <div class="overlay">Calculadora</div>
                    </div>
                </div><!--flex-->
            </div><!--interface-->
        </section><!--portifolio-->

        <section class="formulario">
            <div class="interface">
                <h2 class="titulo">FALA <span>COMIGO.</span></h2>

                <form action="">
                    <input type="text" placeholder="Seu Nome:" required>
                    <input type="text" placeholder="Seu e-mail:" required>
                    <input type="text" placeholder="Seu celular:">
                    <textarea name="" id="" placeholder="Sua mensagem" required></textarea>
                    <div class="dnl_enviar"><input type="submit" value="ENVIAR"></div>
                </form>
            </div><!--interface-->
        </section><!--formulario-->
    </main>
</body>
</html>