
<?php 
session_start();

	include('./php/connection.php');
	include('./php/functions.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Livro Mania - Página Inicial</title>
        <!--Metas para JS e Compatibilidade-->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        
        <!--Links pra fontes e o CSS-->
        <link rel="stylesheet" href="./css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
    </head>
    <body>
        <!--Parte de cima da página (Onde tem logo e os links pra outras páginas)-->
        
        <header>
            <!--Logo-->
            <div class="logo-flex">
                <img src="./img/logo.png" alt="logo">
            </div>
            <!--Links pra outras páginas-->
            <nav class="nav-header">
                <ul class="nav-ul">
                    <li ><a href="" class="nav-li">Página Inicial</a></li>
                    <li ><a href="./produtos.html" class="nav-li">Livros</a></li>
                    <li ><a href="./ofertas.html" class="nav-li">Ofertas</a></li>
                    <li ><a href="./atendimento.html" class="nav-li">Atendimento e televendas</a></li>
                </ul>
            </nav>
            <!--Botões de Usuário e Carrinho-->
            <nav class="user-nav">
                <ul class="user-ul">
                    <li class="user-cart">
                        <img src="./img/carrinho.png" alt="">
                        <div id="shopping-cart">
                            <table id="cart-content" class="shopping-cart-css">
                                <thead>
                                    <th>PRODUTO</th>
                                    <th>NOME</th>
                                    <th>PREÇO</th>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </br>
                                <a href="#" id="clear-cart" class="button-clean-cart">Limpar Carrinho</a>
                                
                    </br>
                </br>
                                <button onclick="buyNow()" id="buy-now" class="button-clean-cart">Comprar Agora</button>
                               
                        </div>    
                    </li>
                    <li><a href="./php/login.php" class="user-user"><img src="./img/user01.png" alt=""></a></li>
		    <li><a href="./php/logout.php" class="logout">Sair</a></li>
                </ul>
            </nav>
        </header>
        <!--Banner principal-->
        <section>
            <div id="slider">
                <figure>
                    <img src="./img/banner.png" alt="">
                    <img src="./img/banner2.png" alt="">
                </figure>
            </div>
        </section>
        <!--Parte principal da página (Parte dos produtos)-->
        <main>
		
            <h1>
		 <?php 
		 	if(isset($_SESSION['user_name']))
			{
				echo "Olá " . $_SESSION['user_name'];
			}else
			{
				echo 'Produtos em destaque';
			}
		 ?>
		</h1>
		
            <br>
            <div id="courses-list" class="container">
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="./img/livro13.jpg" class="livro01">
                            <div class="info-card">
                                <h4>1984 - George Orwell</h4>
                                <p class="price"><span class="u-pull-right ">R$ 40,43</span></p>
                                <a href="#" class="u-full-width button-primary button input add-to-cart" data-id="1">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img src="./img/livro04.jpg" class="livro01">
                            <div class="info-card">
                                <h4>Uma Terra Prometida</h4>
                                <p class="price"><span class="u-pull-right ">R$ 40,43</span></p>
                                <a href="#" class="u-full-width button-primary button input add-to-cart" data-id="1">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img src="./img/livro06.jpg" class="livro01">
                            <div class="info-card">
                                <h4>O Poder da Ação</h4>
                                <p class="price"><span class="u-pull-right ">R$ 40,43</span></p>
                                <a href="#" class="u-full-width button-primary button input add-to-cart" data-id="1">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--Link pro arquivo JS-->
            <script src="./js/app.js"></script>

    <footer class="footer">
        <div class="footer-left">
            <div class="img_Footer"><img src="./img/logo.png" alt=""></div>
            
            <p>
            A Livromania é uma empresa que se dedica a oferecer um espaço multimídia, onde a busca pelo produto é apenas o início de uma jornada enriquecedora: nossas lojas dão vida à cultura por meio de seu extenso acervo recheado por inúmeros livros!
            </p>
            <div class="socials">
                <a href="#"><img src="./img/facebook.png" alt=""></a>
                <a href="#"><img src="./img/instagram.png" alt=""></a>
                <a href="#"><img src="./img/twitter.png" alt=""></a>
            </div>
        </div> 
        <ul class="footer-right">
            <li>
                <h1>Produtos</h1>
                <ul class="box">
                    <li><a href="./produtos.html">Rápido e Devagar</a></li>
                    <li><a href="./produtos.html">1984 - George Orwell</a></li>
                    <li><a href="./produtos.html">Inteligência Visual</a></li>
                    <li><a href="./produtos.html">A Garota do Lago</a></li>
                </ul>
            </li>
            <li class="features">
                <h1>Links Úteis</h1>
                <ul class="box">
                    <li><a href="./produtos.html">Livros</a></li>
                    <li><a href="./ofertas.html">Ofertas</a></li>
                    <li><a href="./atendimento.html">Atendimento e Televendas</a></li>
                </ul>
            </li>
            <li>
                <h1>Fale Conosco</h1>
                <ul class="box">
                    <li>Whatsapp: (11)95784-8652</li>
                    <li>Telefone: (11) 3056-4320</li>
                    <li>Email: contato@livromania.com</li>
                    <li>Loja Física: Av. Dr. Guilherme Dumont Vilares, 1463</li>
                </ul>
            </li>
        </ul>  
        <div class="footer-bottom">
            <p>Todos os direitos reservados por Livro Mania © 2021</p>
        </div> 
    </footer>        
    </body>
</html>
