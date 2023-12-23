<?php
    session_start();
    $pedidos = empty($_SESSION['pedidos']) ? [] : $_SESSION['pedidos'];

    $id = rand(1,100000);
    $_SESSION['pedidos'][] = ['id' => $id];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <header id="navbar">
        <h2>PIZZARIA</h2>
        <nav>
            <ul id="navbar-list">
                <li><a href="#cardapio"> Cardápio</a></li>
                <li><a href="#pedido">Fazer Pedido</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
            <div>
                <a href="">Entrar</a>
            </div>
        </nav>
    </header>
    <main>
        <!-- BANNER -->
        <div class="banner">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">
                <input type="radio" name="radio-btn" id="radio6">


                <div class="banners first">
                    <img src="/public/img/pizza_anchovas.jpg" alt="">
                </div>
                <div class="banners">
                    <img src="/public/img/pizza_brigadeiro.jpg" alt="">
                </div>
                <div class="banners">
                    <img src="/public/img/pizza_calabresa.jpg" alt="">
                </div>
                <div class="banners">
                    <img src="/public/img/pizza_mm.jpg" alt="">
                </div>
                <div class="banners">
                    <img src="/public/img/pizza_moda_da_casa.jpg" alt="">
                </div>
                <div class="banners">
                    <img src="/public/img/pizza_morango.jpg" alt="">
                </div>
                <div class="navegar">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    <div class="auto-btn5"></div>
                    <div class="auto-btn6"></div>
                </div>
            </div>
            <div class="navegar-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
                <label for="radio6" class="manual-btn"></label>
            </div>
        </div>

    </main>

    <!--Cardapio-->
    <section id="cardapio">
        <h3>CARDÁPIO</h3>
            <table id="cardapio-tabela">
                <tr> <!-- linhas -->
                    <th>Sabor</th>  <!-- titulo da celula -->
                    <th>Pequena</th>
                    <th>Média</th>
                    <th>Grande</th>
                    <th>Gigante</th>
                </tr>
                <tr>
                    <td>Marguerita</td>  <!-- celulas/dados -->
                    <td>R$30</td>
                    <td>R$40</td>
                    <td>R$50</td>
                    <td>R$60</td>
                </tr>
                <tr>
                    <td>Calabresa</td>
                    <td>R$30</td>
                    <td>R$40</td>
                    <td>R$50</td>
                    <td>R$60</td>
                </tr>
                <tr>
                    <td>Portuguesa</td>
                    <td>R$30</td>
                    <td>R$40</td>
                    <td>R$50</td>
                    <td>R$60</td>
                </tr>
                <tr>
                    <td>Frango com Catupiry</td>
                    <td>R$30</td>
                    <td>R$40</td>
                    <td>R$50</td>
                    <td>R$60</td>
                </tr>
                <tr>
                    <td>Mussarela</td>
                    <td>R$30</td>
                    <td>R$40</td>
                    <td>R$50</td>
                    <td>R$60</td>
                </tr>
                <tr>
                    <td>Quatro Queijos</td>
                    <td>R$30</td>
                    <td>R$40</td>
                    <td>R$50</td>
                    <td>R$60</td>
                </tr>
            </table>
    </section>

    <!--Fazer Pedido-->
    <section id="pedido">
        <h3>FAZER PEDIDO</h3>
        <form action="store.php" method="post">
            <table id="pedido-tabela">
                <tr> <!-- linhas -->
                    <th>Sabor</th>
                    <th>Pequena</th>
                    <th>Média</th>
                    <th>Grande</th>
                    <th>Gigante</th>
                </tr>
                <tr>
                    <td>Marguerita</td>
                    <td>
                        <input type="checkbox" name="margueritap" id="margueritap" value="marguerita pequena">
                    </td>
                    <td>
                        <input type="checkbox" name="margueritam" id="margueritam" value="marguerita media">
                    </td>
                    <td>
                        <input type="checkbox" name="margueritag" id="margueritag" value="marguerita grande">
                    </td>
                    <td>
                        <input type="checkbox" name="margueritagg" id="margueritagg" value="marguerita gigante">
                    </td>
                </tr>
                <tr>
                    <td>Calabresa</td>
                    <td>
                        <input type="checkbox" name="calabresap" id="calabresap" value="calabresa pequena">
                    </td>
                    <td>
                        <input type="checkbox" name="calabresam" id="calabresam" value="calabresa media">
                    </td>
                    <td>
                        <input type="checkbox" name="calabresag" id="calabresag" value="calabresa grande">
                    </td>
                    <td>
                        <input type="checkbox" name="calabresagg" id="calabresagg" value="calabresa gigante">
                    </td>
                </tr>
                <tr>
                    <td>Portuguesa</td>
                    <td>
                        <input type="checkbox" name="portuguesap" id="portuguesap" value="portuguesa pequena">
                    </td>
                    <td>
                        <input type="checkbox" name="portuguesam" id="portuguesam" value="portuguesa media">
                    </td>
                    <td>
                        <input type="checkbox" name="portuguesag" id="portuguesag" value="portuguesa grande">
                    </td>
                    <td>
                        <input type="checkbox" name="portuguesagg" id="portuguesagg" value="portuguesa gigante">
                    </td>
                </tr>
                <tr>
                    <td>Frango com Catupiry</td>
                    <td>
                        <input type="checkbox" name="frangop" id="frangop" value="frango com catupiry pequena">
                    </td>
                    <td>
                        <input type="checkbox" name="frangom" id="frangom" value="frango com catupiry media">
                    </td>
                    <td>
                        <input type="checkbox" name="frangog" id="frangog" value="frango com catupiry grande">
                    </td>
                    <td>
                        <input type="checkbox" name="frangogg" id="frangogg" value="frango com catupiry gigante">
                    </td>
                </tr>
                <tr>
                    <td>Mussarela</td>
                    <td>
                        <input type="checkbox" name="mussarelap" id="mussarelap" value="mussarela pequena">
                    </td>
                    <td>
                        <input type="checkbox" name="mussarelam" id="mussarelam" value="mussarela media">
                    </td>
                    <td>
                        <input type="checkbox" name="mussarelag" id="mussarelag" value="mussarela grande">
                    </td>
                    <td>
                        <input type="checkbox" name="mussarelagg" id="mussarelagg" value="mussarela gigante">
                    </td>
                </tr>
                <tr>
                    <td>Quatro Queijos</td>
                    <td>
                        <input type="checkbox" name="queijop" id="queijop" value="queijo pequena">
                    </td>
                    <td>
                        <input type="checkbox" name="queijom" id="queijom" value="queijo media">
                    </td>
                    <td>
                        <input type="checkbox" name="queijog" id="queijog" value="queijo grande">
                    </td>
                    <td>
                        <input type="checkbox" name="queijogg" id="queijogg" value="queijo gigante">
                    </td>
                </tr>
            </table>
            <h4>Adicionais</h4>
            <table id="pedido-tabela">
                <tr>
                    <td>
                        <label for="cebola">Cebola Extra</label>
                        <label for="">R$1</label>
                        <td>
                            <input type="checkbox" name="cebola" id="cebola" value=" cebola extra">
                        </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="queijo">Queijo Extra</label>
                        <label for="">R$2</label>
                        <td>
                            <input type="checkbox" name="queijoex" id="queijoex" value="queijo extra">
                        </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bacon">Bacon Extra</label>
                        <label for="">R$2</label>
                        <td>
                            <input type="checkbox" name="bacon" id="bacon" value="bacon extra">
                        </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bordaR">Borda Recheada</label>
                        <label for="">R$5</label>
                        <td>
                            <input type="checkbox" name="borda" id="borda" value="borda recheada">
                        </td>
                    </td>
                </tr>
            </table>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <!--Sobre-->
    <section id="sobre">
        <h3>SOBRE</h3>
        <p> A história da pizza começou aproximadamente no século VI a.C., quando povos do Mediterrâneo, como egípcios e gregos, inventaram a receita de uma espécie de pão árabe com uma massa plana, bem fina e em formato de disco. O alimento tinha como ingredientes água e farinha de trigo.
            Acredita-se que, com o tempo, o referido pão foi adaptado por povos de outras culturas, como fenícios e romanos. Esses povos passaram a temperá-lo, cobrindo-o com óleos, ervas e verduras.     
            O pão que, no futuro, seria chamado de pizza somente chegou à Itália no século XVIII, mais especificamente à província de Nápoles, situada na região da Campânia, no sul do país. Inicialmente, o pão com cobertura era vendido na rua e conhecido como “prato dos pobres”, por ser barato.
            Com o tempo, os italianos aprimoraram a receita, colocando coberturas ou recheios mais variados em cima da massa. Os primeiros sabores de pizzas da Itália foram mastunicola, que tinha manjericão, banha, queijo e pimenta, e cecinielli, com pedaços de peixe.
            A pizzaria mais antiga do mundo chama-se Antica Pizzeria Port'Alba e foi inaugurada em 1738, em Nápoles, na Itália. O restaurante existe até hoje.
        </p>
    </section>

    <!--Contato-->
    <section id="contato">
        <h3>CONTATO</h3>
        <h4>Fale com a gente</h4>
        <div id="telefone">
            <img src="/public/img/telefone.png" alt="telefone">
            <p>Telefone: (18) 3611-2222</p>
        </div>
        <div id="whatsapp">
            <img src="/public/img/whats.png" alt="whatsapp">
            <p>Whatsapp: (18) 99999-6666</p>
        </div>
    </section>
</body>
</html>