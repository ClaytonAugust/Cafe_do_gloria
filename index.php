<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>café do glória</title>
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>
    <!-- Começo container logo -->
    <header>
        <div class="container-logo">
            <div class="logo-imagem">
                <img src="./image/CDG.png">
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
            <li class="active"><a href="#"><img src="./image/casa.png", class="fa">Home</a></li>
            <li><a href="#"><img src="./image/xicara-de-cafe.png", class="fa">Contato</a></li>
            <li><a href="#"><img src="./image/xicara-de-cafe.png", class="fa">Registrar</a></li>
            <li><a href="#"><img src="./image/xicara-de-cafe.png", class="fa">Especiais</a></li>
            <li><a href="#"><img src="./image/shopping-cart.png", class="fa">Compras</a></li>
            <li><a href="#"><img src="./image/enter.png", class="fa">Login</a></li>
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
                <img src="./image/datos-sobre-el-cafe.png" alt="Imagem 1"/>
            </div>
            <div class="slide">
                <img src="./image/agua.png" alt="Imagem 2"/>
            </div>
            <div class="slide">
                <img src="./image/bonito.png" alt="Imagem 3"/>
            </div>
            <div class="slide">
                <img src="./image/nãosei.png" alt="Imagem 4"/>
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
        <img src="./image/lupa.png" id="btnBusca" alt="Buscar"/>
    </div>
    <!--expresso-->
  <div class="title-style">
      <h1>EXPRESSO</h1>
  </div>

    <div class="conteiner-expresso">   
    <section class="expresso"><img src="" alt=""></section>
    <section class="expresso"><img scr="" alt=""></section>
    <section class="expresso"><img scr="" alt=""></section>
    <section class="expresso"><img scr="" alt=""></section>    
</div>
    <!--latté-->
    <div class="title-style">
        <h1>LATTÉ</h1>
    </div>

<div class="conteiner-latté">
    <section class="latté"><img src="" alt=""></section>
    <section class="latté"><img src="" alt=""></section>
    <section class="latté"><img src="" alt=""></section>
    <section class="latté"><img src="" alt=""></section>
</div>
    <!--mocha-->
    <div class="title-style">
        <h1>MOCHA</h1>
    </div>
    
<div class="conteiner-mocha">
    <section class="mocha"><img src="" alt=""></section>
    <section class="mocha"><img src="" alt=""></section>
    <section class="mocha"><img src="" alt=""></section>
    <section class="mocha"><img src="" alt=""></section>
</div>
    <!--especiais-->
    <div class="title-style"> 
        <h1>ESPECIAIS</h1>
    </div>
    

<div class="conteiner-especiais">
    <section class="especiais"><img src="" alt=""></section>
    <section class="especiais"><img src="" alt=""></section>
    <section class="especiais"><img src="" alt=""></section>
    <section class="especiais"><img src="" alt=""></section>
</div>
    <script src="./script.js"></script>
</body>
</html>
