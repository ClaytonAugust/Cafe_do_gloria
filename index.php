<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafedb";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Se o formulário de adição de review foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionar_review"])) {
    $nome = $_POST["nome"];
    $comentario = $_POST["comentario"];

    // Inserir a review no banco de dados
    $sql = "INSERT INTO reviews (nome, comentario) VALUES ('$nome', '$comentario')";
    $conn->query($sql);

    // Redirecionar para evitar o reenvio do formulário
    header("Location: http://localhost/cafe_do_gloria/index.php");
    exit();
}

// Se o formulário de remoção de review foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["remover_review"])) {
    $review_id = $_POST["review_id"];

    // Remover a review do banco de dados
    $sql = "DELETE FROM reviews WHERE id = $review_id";
    $conn->query($sql);

    // Redirecionar para evitar o reenvio do formulário
    header("Location: http://localhost/cafe_do_gloria/index.php");
    exit();
}

// Se o formulário de edição de review foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["editar_review"])) {
    $review_id = $_POST["review_id"];
    $novo_comentario = $_POST["novo_comentario"];

    // Atualizar o comentário no banco de dados
    $sql = "UPDATE reviews SET comentario = '$novo_comentario' WHERE id = $review_id";
    $conn->query($sql);

    // Redirecionar para evitar o reenvio do formulário
    header("Location: http://localhost/cafe_do_gloria/index.php");
    exit();
}

// Selecionar todas as reviews do banco de dados
$sql = "SELECT id, nome, comentario FROM reviews";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>café do glória</title>
    <link rel="stylesheet" href="./assets/style.css">
    
</head>
<body class="main">
    <!-- Começo container logo -->
    <header class="mainHeader">
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
            <li><a href="http://localhost/cafe_do_gloria/index.php"><img src="./assets/img/casa.png", class="fa">Home</a></li>
            <li><a href="#"><img src="./assets/img/xicara-de-cafe.png", class="fa">Contato</a></li>
            <li><a href="http://localhost/cafe_do_gloria/pages/register.php"><img src="./assets/img/xicara-de-cafe.png", class="fa">Registrar</a></li>
            <li><a href="#"><img src="./assets/img/xicara-de-cafe.png", class="fa">Sócios</a></li>
            <li><a href="#"><img src="./assets/img/shopping-cart.png", class="fa">Compras</a></li>
            <li><a href="http://localhost/cafe_do_gloria/pages/login.php"><img src="./assets/img/enter.png", class="fa">Login</a></li>
        </ul>
    </div>
    <div class="menu-btn">&#9776; Menu</div>
        <div class="menu-dropdown">
            <a href="#">Home</a>
            <a href="#">Contato</a>
            <a href="#">Registrar</a>
            <a href="#">Sócios</a>
            <a href="#">Compras</a>
            <a href="#">Login</a>
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
                <img src="./assets/img/AmericanoCafeCarroselPromo.png" alt="Imagem 1"/>
            </div>
            <div class="slide">
                <img src="./assets/img/FrapuccinoPacocaCarroselPromo.png" alt="Imagem 2"/>
            </div>
            <div class="slide">
                <img src="./assets/img/AmericanoExpressoCarroselPromo.png" alt="Imagem 3"/>
            </div>
            <div class="slide">
                <img src="./assets/img/LatteMachiatoCarroselPromo.png" alt="Imagem 4"/>
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

    <!--expresso-->
  <div class="title-style">
      <h1>EXPRESSO</h1>
      <p>Café expresso é basicamente um café sem adição de açúcares ou leite. Geralmente servido em uma pequena xícara de porcelana.</p>
  </div>
  <section class="expresso">
    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/ExpressoSimples.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Expresso simples</h3>
            <p>
                Café Expresso de quantidade padrão.
                <p>30-35ml de café</p>
                <p>Aqueça a xícara com água quente.</p>
                <p>Verifique se o porta-filtro e o cesto estão limpos e secos.</p>
                <p>Adicione 8 a 10 gramas de café moído no cesto.</p>
                <p>Compacte o café moído no cesto com uma pressão de 20 a 30 libras.</p>
                <p>Limpe o excesso de café moído do porta-filtro.</p>
                <p>Coloque o porta-filtro no grupo de extração da máquina de café expresso.</p>
                <p>Inicie a extração do café pressionando o botão de extração.</p>
                <p>Pare a extração quando o café atingir 25 a 35 ml.</p> 
                <p>Sirva o expresso em uma xícara aquecida.</p> 
            </p>
        </div>
        <button class="ler-mais">Ler mais</button>   
    </div>

    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/RistrettoExpresso.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Ristretto</h3>
            <p>
                Com seu significado em português "limitado", ele é 
                metade da quantidade de um expresso simples.
                <p>O café Ristretto nada mais é que um espresso bem curto. Servido em xícaras pequenas com um volume de 15 a 20 mililitros de bebida.
                Inclusive, esse tipo de extração é considerado o “néctar do café”. Isso porque mesmo feito com espresso, ele pode ser doce, se for extraído corretamente, é claro.
                Seu estilo tem traços dos cafés italianos, ou seja, uma bebida de sabor rico, encorpado e intenso.</p>
                <p>20-25ml de café</p>
            </p>
        </div>
        <button class="ler-mais">Ler mais</button>   
    </div>

    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/LungoExpresso.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Lungo</h3>
            <p>
                Com seu significado em português "longo", ele é mais que
                a quantidade de um expresso simples.
                <p>40-45ml de café</p>
                <p>Meia xícara de chá de suco integral de maçã</p>
                <p>1 cápsula de NESCAFE DOLCE GUSTO Lungo</p>    
                <p>4 cubos de gelo</p>
                <p>1 rodelas de laranja</p>
            </p>
        </div>
        <button class="ler-mais">Ler mais</button>   
    </div>

    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/AmericanoExpresso.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Americano</h3>
            <p>
                Feito em uma xícara de Doppio mas com uma dose de
                café expresso, água quente até o topo, assim deixando 
                o café mais forte e sua água mais leve, trazendo um sabor 
                diferente a bebida.
                <p>Aqueça a xícara com água quente.</p>
                <p>Verifique se o porta-filtro e o cesto estão limpos e secos.</p>    
                <p>Moa cerca de 8 a 10 gramas de café moído fino.</p>     
                <p>Coloque o café moído no cesto do porta-filtro.</p>     
                <p>Compacte o café moído no cesto do porta-filtro.</p>     
                <p>Limpe o excesso de café do porta-filtro.</p>    
                <p>Encaixe o porta-filtro na máquina de espresso.</p>     
                <p>Coloque a xícara aquecida sob o porta-filtro.</p>     
                <p>Inicie a extração do espresso.</p>     
                <p>Observe a cor e a textura do espresso.</p>     
                <p>Pare a extração quando a quantidade desejada de espresso for atingida.</p>     
                <p>Descarte o café usado.</p>     
                <p>Limpe o porta-filtro e o cesto.</p>     
                <p>Sirva o espresso.</p>     
            </p>
        </div>
        <button class="ler-mais">Ler mais</button>   
    </div>
  </section>
  <div class="title-style">
      <h1>LATTÉ</h1>
      <p>Latté é uma bebida constituida principalmente por café e leite.</p>
  </div>
  <section class="expresso">
    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/Caffelatte.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Caffellatte</h3>
            <p>
                É um café expresso misturado com cerca de 200ml de leite morno em uma xícara de tamanho normal(grande).
                <p>30-35ml de café</p>
                <p>1 cápsula de Nespresso World Exploration Tokyo Vivalto Lungo,
                World Exploration Stockholm Fortissio Lungo,
                Double Espresso Chiaro ou 2 cápsulas de Bianco Delicato</p>
                <p> 200 ml de leite morno</p>
            </p>
        </div>
        <button class="ler-mais">Ler mais</button>   
    </div>

    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/AmericanoLatte.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Americano Latte</h3>
            <p>
                Parecido com o Caffellate porém a temperatura do leite é maior, trazendo um sabor diferente ao café.
                <p>30-35ml de café</p>
                <p>200ml de leite quente</p>
                <p>Café espresso</p> 
                <p>Leite vaporizado</p> 
                <p>Tempo de preparo</p> 
                <p>10 minutos</p> 
            </p>
        </div>
        <button class="ler-mais">Ler mais</button>   
    </div>

    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/LatteMachiato.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Latte Macchiato</h3>
            <p>
                O leite quente é servido em um copo alto e no mesmo há a adição de um expresso derramado no topo.
                <p>40 ml de café</p>
                <p>Coloque 100 a 120 ml de leite frio ou bebida vegetal no aeroccino e inicie a preparação da espuma quente e cremosa.</p>
                <p>Verta o leite quente para o copo de receitas e com a ajuda de uma colher impeça que a espuma se vá misturando com o leite quente, nesse processo.</p> 
                <p>Estando criadas as primeiras duas camadas (leite e espuma de leite), agora pode extrair 40 ml de um café da sua preferência.</p> 
                <p>Adicione açúcar a gosto e decore com granola ou açúcar mascavado, se desejar.</p> 
            </p>
        </div>
        <button class="ler-mais">Ler mais</button>   
    </div>

    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/CapuccinoLatte.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Cappuccino</h3>
            <p>
                Mesmas proporções do Expresso Americano, porém ao invés de ser água se é utilizado leite 
                vaporizado, o que faz criar uma espuma leve, trazendo uma visão mais gourmet pra bebida.
                <p>30-35ml de café</p>
                <p>80 ml de leite quente vaporizado</p>
                <p>pitada de cacau em pó(a gosto)</p>
                <p>pitada de canela(a gosto)</p>
            </p>
        </div>
        <button class="ler-mais">Ler mais</button>   
    </div>
  </section>

  <div class="title-style">
      <h1>MOCHA</h1>
      <p>Nos mesmo principios do Latté mas adicionamos o CHOCOLATE</p>
  </div>
  <section class="expresso">
    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/Mocaccino.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Mocaccino</h3>
            <p>
                É uma bebida à base de café produzida com café expresso,
                leite vaporizado, chocolate e chantilly.

                <p>50ml de calda de chocolate</p>
                <p>50ml de café espresso</p>
                <p>50ml de leite vaporizado</p>
                <p>Chantilly</p>
                <p>Açúcar(a gosto)</p>
            </p>
        </div>
        <button class="ler-mais">Ler mais</button>   
    </div>

    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/FrapuccinoCaramelo.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Frapuccino de Caramelo e Baunilha</h3>
            <p>
                Uma bebida de café refrescante, perfeito para um dia quente.
                <p>240ml de café forte sem açúcar</p>
                <p>5g chocolate em pó ou em barra</p>
                <p>250ml de leite gelado</p>
                <p>15ml de caramelo</p>
                <p>15ml de extrato de baunilha</p>
                <p>Chantilly</p>
            </p>
        </div>
        <button class="ler-mais">Ler mais</button>   
    </div>

    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/FrapuccinoMorangoMocha.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Frapuccino de Morango</h3>
            <p>
                Uma bebida de café refrescante, perfeito para um dia quente.
                <p>240ml de café forte sem açúcar</p>
                <p>5g chocolate em pó ou em barra</p>
                <p>250ml de leite gelado</p>
                <p>Purê de morango</p>
                <p>Crocante de caramelo</p>
                <p>Chantilly</p>
            </p>
        </div>
        <button class="ler-mais">Ler mais</button>   
    </div>

    <div class="card"> 
        <div class="icon">
            <img src="./assets/img/FrapuccinoPacocaMocha.png" alt="hotcoffe">
        </div>  
        <div class="content">
            <h3>Frapuccino de Paçoca</h3>
            <p>
                Uma bebida de café refrescante, perfeito para um dia quente.
                <p>240ml de café forte sem açúcar</p>
                <p>5g chocolate em pó ou em barra</p>
                <p>250ml de leite gelado</p>
                <p>Paçoca ou farinha de amendoim doce</p>
                <p>Crocante de caramelo</p> 
                <p>Chantilly</p> 
            </p>
        </div>
        <button class="ler-mais">Ler mais</button>   
    </div>
  </section>
<!--Parte de reviews-->
<div id="reviewPopup" class="add-review-form">
    <div class="add-review-form-content">
        <h3>Nova Review</h3>
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <form method="post" action="">
            Nome: <input type="text" name="nome" required><br>
            Comentário: <textarea name="comentario" required></textarea><br>
            <input type="submit" name="adicionar_review" value="Adicionar Review">
        </form>
    </div>
</div>
<div class="title-style-reviews">
    <h1>Reviews</h1>
</div>
<button id="openPopupBtn" class="botaoReview">Adicionar Review</button>
<div class="reviews-container">
    <?php
// Exibir todas as reviews
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='review-item'>";
            echo "<strong>{$row['nome']}</strong>: {$row['comentario']}";
            echo "<form method='post' action=''><input type='hidden' name='review_id' value='{$row['id']}'>";
            echo "<input type='submit' name='remover_review' value='Remover'>";
            echo "<input type='button' name='editar_review' onclick='editarReview({$row['id']}, \"{$row['comentario']}\")' value='Editar'>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "Nenhuma review disponível.";
    }
    ?>
</div>

<!-- Formulário para editar review -->
<div class="editar-review-div">
    <div id="editar-review-form" style="display: none;" class="editar-review">
        <h3>Editar Review</h3>
        <form method="post" action="">
            <input type="hidden" id="review-id-editar" name="review_id">
            Novo Comentário: <textarea name="novo_comentario" id="novo-comentario" required></textarea><br>
            <input type="submit" name="editar_review" value="Salvar">
            <input type="button" name="cancelar_review" onclick="cancelarEdicao()" value="Cancelar">
        </form>
    </div>
</div>

<!--Parte do footer-->
    <footer class="footerMain">
        <div id="footer_content">
            <div id="footer_contacts">
                <div class="logo-footerimagem">
                    <img src="./assets/img/CDG.png">
                </div>
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
<?php
    // Fechar conexão ao finalizar
    $conn->close();
?>