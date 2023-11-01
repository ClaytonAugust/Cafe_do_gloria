<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>café do glória</title>
    <link rel="stylesheet" href="./assets/style.css">
    
</head>
<body>
    <!-- Começo container logo -->
    <header>
        <div class="container-logo">
            <div class="logo-imagem">
                <img src="./assets/img/CDG.png">
            </div>
            <div class="logo-texto">
                <h1>Café do Glória</h1>
            </div>
        </div>
    </header>
    <!-- Fim container logo -->

    <!-- Começo menu -->
    <div class="menu">
        <ul>
            <li class="active"><a href="#"><img src="./assets/img/casa.png", class="fa">Home</a></li>
            <li><a href="#"><img src="./assets/img/xicara-de-cafe.png", class="fa">Contato</a></li>
            <li><a href="#"><img src="./assets/img/xicara-de-cafe.png", class="fa">Registrar</a></li>
            <li><a href="#"><img src="./assets/img/xicara-de-cafe.png", class="fa">Sócios</a></li>
            <li><a href="#"><img src="./assets/img/shopping-cart.png", class="fa">Compras</a></li>
            <li><a href="#"><img src="./assets/img/enter.png", class="fa">Login</a></li>
        </ul>
    </div>
    <!-- Fim menu -->

    <!--Começo carrossel-->
    <div class="slider">
        <div class="slides">
            <!--Radio Buttons-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!--Fim Radio Buttons-->

            <!--Slide images-->
            <div class="slide first">
                <img src="./assets/img/datos-sobre-el-cafe.png" alt="Imagem 1"/>
            </div>
            <div class="slide">
                <img src="./assets/img/agua.png" alt="Imagem 2"/>
            </div>
            <div class="slide">
                <img src="./assets/img/bonito.png" alt="Imagem 3"/>
            </div>
            <div class="slide">
                <img src="./assets/img/nãosei.png" alt="Imagem 4"/>
            </div>
            <!--Fim Slide images-->

            <!--Navigation auto-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>

            </div>
        </div>
        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
    <!--Fim carrossel-->

    <!--Buscador-->
    <div id="Busca">
        <input type="text" id="txtBusca" placeholder="Buscar..."/>
        <img src="./assets/img/lupa.png" id="btnBusca" alt="Buscar"/>
    </div>
    <!--expresso-->
  <div class="title-style">
      <h1>EXPRESSO</h1>
  </div>
  <section class="expresso">
    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/hot-chocolate_3948914.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Expresso</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A pariatur nostrum voluptatum neque ipsum quo sapiente. Tempore cum quia ut laudantium possimus aut, excepturi molestias, 
                quae, nisi recusandae voluptate accusantium.
            </p>
        </div>
        <button id="read_button">Read more</button>   
    </div>

    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/hot-chocolate_3948914.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Expresso</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A pariatur nostrum voluptatum neque ipsum quo sapiente. Tempore cum quia ut laudantium possimus aut, excepturi molestias, 
                quae, nisi recusandae voluptate accusantium.
            </p>
        </div>
        <button id="read_button">Read more</button>   
    </div>

    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/hot-chocolate_3948914.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Expresso</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A pariatur nostrum voluptatum neque ipsum quo sapiente. Tempore cum quia ut laudantium possimus aut, excepturi molestias, 
                quae, nisi recusandae voluptate accusantium.
            </p>
        </div>
        <button id="read_button">Read more</button>   
    </div>

    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/hot-chocolate_3948914.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Expresso</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A pariatur nostrum voluptatum neque ipsum quo sapiente. Tempore cum quia ut laudantium possimus aut, excepturi molestias, 
                quae, nisi recusandae voluptate accusantium.
            </p>
        </div>
        <button id="read_button">Read more</button>   
    </div>
  </section>
    
    <!--latté-->
    <div class="title-style">
        <h1>LATTÉ</h1>
    </div>
    <section class="expresso">
        <div class="card"> 
            <div class="icon">
                <img src="./assets/img/hot-chocolate_3948914.png" alt="hotcoffe">
            </div>  
            <div class="content">
                <h3>Expresso</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A pariatur nostrum voluptatum neque ipsum quo sapiente. Tempore cum quia ut laudantium possimus aut, excepturi molestias, 
                    quae, nisi recusandae voluptate accusantium.
                </p>
            </div>
            <button id="read_button">Read more</button>   
        </div>
    
        <div class="card"> 
            <div class="icon">
                <img src="./assets/img/hot-chocolate_3948914.png" alt="hotcoffe">
            </div>  
            <div class="content">
                <h3>Expresso</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A pariatur nostrum voluptatum neque ipsum quo sapiente. Tempore cum quia ut laudantium possimus aut, excepturi molestias, 
                    quae, nisi recusandae voluptate accusantium.
                </p>
            </div>
            <button id="read_button">Read more</button>   
        </div>
    
        <div class="card"> 
            <div class="icon">
                <img src="./assets/img/hot-chocolate_3948914.png" alt="hotcoffe">
            </div>  
            <div class="content">
                <h3>Expresso</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A pariatur nostrum voluptatum neque ipsum quo sapiente. Tempore cum quia ut laudantium possimus aut, excepturi molestias, 
                    quae, nisi recusandae voluptate accusantium.
                </p>
            </div>
            <button id="read_button">Read more</button>   
        </div>
    
        <div class="card"> 
            <div class="icon">
                <img src="./assets/img/hot-chocolate_3948914.png" alt="hotcoffe">
            </div>  
            <div class="content">
                <h3>Expresso</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A pariatur nostrum voluptatum neque ipsum quo sapiente. Tempore cum quia ut laudantium possimus aut, excepturi molestias, 
                    quae, nisi recusandae voluptate accusantium.
                </p>
            </div>
            <button id="read_button">Read more</button>   
        </div>
      </section>

    
    <!--mocha-->
    <div class="title-style">
        <h1>MOCHA</h1>
    </div>
    <section class="expresso">
        <div class="card"> 
            <div class="icon">
                <img src="./assets/img/hot-chocolate_3948914.png" alt="hotcoffe">
            </div>  
            <div class="content">
                <h3>Expresso</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A pariatur nostrum voluptatum neque ipsum quo sapiente. Tempore cum quia ut laudantium possimus aut, excepturi molestias, 
                    quae, nisi recusandae voluptate accusantium.
                </p>
            </div>
            <button id="read_button">Read more</button>   
        </div>
    
        <div class="card"> 
            <div class="icon">
                <img src="./assets/img/hot-chocolate_3948914.png" alt="hotcoffe">
            </div>  
            <div class="content">
                <h3>Expresso</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A pariatur nostrum voluptatum neque ipsum quo sapiente. Tempore cum quia ut laudantium possimus aut, excepturi molestias, 
                    quae, nisi recusandae voluptate accusantium.
                </p>
            </div>
            <button id="read_button">Read more</button>   
        </div>
    
        <div class="card"> 
            <div class="icon">
                <img src="./assets/img/hot-chocolate_3948914.png" alt="hotcoffe">
            </div>  
            <div class="content">
                <h3>Expresso</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A pariatur nostrum voluptatum neque ipsum quo sapiente. Tempore cum quia ut laudantium possimus aut, excepturi molestias, 
                    quae, nisi recusandae voluptate accusantium.
                </p>
            </div>
            <button id="read_button">Read more</button>   
        </div>
    
        <div class="card"> 
            <div class="icon">
                <img src="./assets/img/hot-chocolate_3948914.png" alt="hotcoffe">
            </div>  
            <div class="content">
                <h3>Expresso</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A pariatur nostrum voluptatum neque ipsum quo sapiente. Tempore cum quia ut laudantium possimus aut, excepturi molestias, 
                    quae, nisi recusandae voluptate accusantium.
                </p>
            </div>
            <button id="read_button">Read more</button>   
        </div>
      </section>
    
<!--Parte do footer-->
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>Logo</h1>
                <p>Redes Sociais.</p>
                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <img src="./assets/img/instagram.png">
                    </a>
                    <a href="#" class="footer-link" id="facebook">
                        <img src="./assets/img/facebook.png">
                    </a>
                    <a href="#" class="footer-link" id="linkedin">
                        <img src="./assets/img/linkedin.png">
                    </a>
                </div>
            </div>
            <ul class="footer-list">
                <li>
                    <h3>Blog</h3>
                </li>
                <li>
                    <a  href="#" class="footer-link">Tech</a>
                </li>
                <li>
                    <a  href="#" class="footer-link">Adventures</a>
                </li>
                <li>
                    <a  href="#" class="footer-link">Music</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Products</h3>
                </li>
                <li>
                    <a  href="#" class="footer-link">App</a>
                </li>
                <li>
                    <a  href="#" class="footer-link">Desktop</a>
                </li>
                <li>
                    <a  href="#" class="footer-link">Cloud</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Subscribe</h3>

                <p>
                    Enter your e-mail to get notified about
                    our news solutions
                </p>
                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <img src="./assets/img/envelope.png">
                    </button>
                </div>
            </div>
        </div>
        <div id="footer_copyright">
            &#169
            2023 all rights reserved
        </div>
    </footer>
    <script src="./assets/script.js"></script>
</body>
</html>