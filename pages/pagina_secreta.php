<?php
session_start();
 
// Verificar se o usuário está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Secreta</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="vilian">
    <!-- Começo container logo -->
    <header class="villianHeader">
        <div class="container-logo-vilian">
            <div class="logo-imagem">
                <img src="../assets/img/coringaicon.png">
            </div>
            <div class="logo-texto-vilian">
                <h1>Café dos vilões</h1>
            </div>
        </div>
    </header>
    <!-- Fim container logo -->

    <!-- Começo menu -->
    <div class="vilianMenu">
        <ul>
            <li><a href="http://localhost/cafe_do_gloria/index.php"><img src="../assets/img/charada.png", class="vilianMenuButton">Home</a></li>
            <li><a href="#"><img src="../assets/img/charada.png", class="vilianMenuButton">Contato</a></li>
            <li><a href="http://localhost/cafe_do_gloria/pages/register.php"><img src="../assets/img/charada.png", class="vilianMenuButton">Registrar</a></li>
            <li><a href="http://localhost/cafe_do_gloria/index.php"><img src="../assets/img/charada.png", class="vilianMenuButton">Logout</a></li>
        </ul>
    </div>
    <!-- Fim menu -->

    <!--Começo carrossel-->
    <div class="slider">
        <div class="slides">
            <!--Radio Buttons-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <!--Fim Radio Buttons-->

            <!--Slide images-->
            <div class="slide first">
                <img src="../assets/img/PromoCoringaViloes.png" alt="Imagem 1"/>
            </div>
            <div class="slide">
                <img src="../assets/img/PromoGeladoViloes.png" alt="Imagem 2"/>
            </div>
            <!--Fim Slide images-->
            <!--Navigation auto-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
            </div>
        </div>
        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
        </div>
    </div>
    <!--Fim carrossel-->
    <!--expresso-->
  <div class="title-style-vilian">
      <h1>Os Nossos Cafés</h1>
      <p>Hahahahahaha</p>
  </div>
  <section class="expressoVilian">
    <div class="card-vilian"> 
        <div class="icon">
            <img src="../assets/img/Coringafe.png" alt="hotcoffe">
        </div>  
        <div class="content-vilian">
            <h3>Coringaffe</h3>
            <p>
                É um Café ácido com uma cor esverdeada que faz com aquele que bebe,
                seja contaminado pela loucura com um sorriso no rosto até a morte
                <p>30-40ml de café</p>
                <p>Se entregar o Batman para o coringa, você recebe de graça</p>
            </p>
        </div>
        <button class="ler-mais-vilian">Ler mais</button>   
    </div>

    <div class="card-vilian"> 
        <div class="icon">
            <img src="../assets/img/DoutorFrioViloes.png" alt="hotcoffe">
        </div>  
        <div class="content-vilian">
            <h3>Dr.geladoCoffer</h3>
            <p>
                Esse é com certeza o café mais frio que você vai tomar na vida e só vai conseguir
                tomar uma vez, pois ficará com seu interior congelado.
                <p>Talvez tem Nitrogênio líquido em sua composição</p>
                <p>20-25ml de café</p>
            </p>
        </div>
        <button class="ler-mais-vilian">Ler mais</button>   
    </div>

    <div class="card-vilian"> 
        <div class="icon">
            <img src="../assets/img/Charadacoffer.png" alt="hotcoffe">
        </div>  
        <div class="content-vilian">
            <h3>CharadaCoffer</h3>
            <p>
                É um café que vai fazer com que você resolva charadas com facilidade.
                <p>40-45ml de café</p>
                <p>Ele adora criar um quebra cabeça investigativo para o Batman e
                    levar o Batman para uma armadilha talvez?
                </p>
        </div>
        <button class="ler-mais-vilian">Ler mais</button>   
    </div>

    <div class="card-vilian"> 
        <div class="icon">
            <img src="../assets/img/HarleyQuinnViloes.png" alt="hotcoffe">
        </div>  
        <div class="content-vilian">
            <h3>HarleyquinCoffer</h3>
            <p>
                Provavelmente você terá um ataque de loucura por ser muito doce
                e fará cambalhotas igual um bobo da corte
            </p>
            <p>20-40ml de café</p>
            <p>Se entregar um taco novinho para ela, talvez receberá de graça ou vai dormir para sempre</p>
            
        </div>
        <button class="ler-mais-vilian">Ler mais</button>   
    </div>
  </section>
<!--Parte do footer-->
    <footer class="footerVilian">
        <div id="footer_content">
            <div id="footer_contacts">
                <div class="logo-footerimagem">
                    <img src="../assets/img/Harleyquin.png">
                </div>
                <p>Redes Sociais.</p>
                <div id="footer_social_media">
                    <a href="#" class="footer-link_vilian" id="instagram">
                        <img src="../assets/img/instagram.png">
                    </a>
                    <a href="#" class="footer-link_vilian" id="facebook">
                        <img src="../assets/img/facebook.png">
                    </a>
                    <a href="#" class="footer-link_vilian" id="linkedin">
                        <img src="../assets/img/linkedin.png">
                    </a>
                </div>
            </div>
            <ul class="footer-list-vilian">
                <li>
                    <h3>Blog</h3>
                </li>
                <li>
                    <a  href="#" class="footer-link_vilian">Tech</a>
                </li>
                <li>
                    <a  href="#" class="footer-link_vilian">Adventures</a>
                </li>
                <li>
                    <a  href="#" class="footer-link_vilian">Music</a>
                </li>
            </ul>

            <ul class="footer-list-vilian">
                <li>
                    <h3>Products</h3>
                </li>
                <li>
                    <a  href="#" class="footer-link_vilian">App</a>
                </li>
                <li>
                    <a  href="#" class="footer-link_vilian">Desktop</a>
                </li>
                <li>
                    <a  href="#" class="footer-link_vilian">Cloud</a>
                </li>
            </ul>

            <div id="footer_subscribe_vilian">
                <h3>Subscribe</h3>

                <p>
                    Enter your e-mail to get notified about
                    our news solutions
                </p>
                <div id="input_group">
                    <input type="email" nameid="email_vilian">
                    <button>
                        <img src="../assets/img/envelope.png">
                    </button>
                </div>
            </div>
        </div>
        <div id="footer_copyright_vilian">
            &#169
            2023 all rights reserved
        </div>
    </footer>
    <script src="../assets/script.js"></script>
</body>
</html>
