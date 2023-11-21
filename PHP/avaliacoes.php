
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Fitness Estácio - Avaliações	</title>
		<link rel="shortcut icon" href="../Imagens/Design/Halter.png" type="image/x-icon">
		<link rel="stylesheet" href="../CSS/style2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yu+Mincho">
		<script src="../JavaScript/script.js"></script>
	</head>

    <body>
        <section class="sectionHeader">
            <div class="menuDropdown" id="menuDropdown">
                <ul class="listaDropdown">
                    <li><button onclick="fecharMenu()" style="height: 5rem; background-color: transparent; border: none;"><img
                        src="../Imagens/Design/fecharMenu.png" style="width: 5rem; margin-left: 0;"></button></li>
                    <li>‎ </li>
                    <li>‎ </li>
                    <li>‎ </li>
                    <li><a class="buttonMenu" href="../index.html">HOME</a></li>
                    <li><a class="buttonMenu" href="../HTML/exercicios.html">EXERCÍCIOS</a></li>
                    <li><a class="buttonMenu" href="../HTML/sobre nos.html">SOBRE NÓS</a></li>
                    <li><a class="buttonMenu" href="../HTML/contatos.html">NOSSOS CONTATOS</a></li>
                    <li><a class="buttonMenu" href="../HTML/conta.html">CONTA</a></li>
                    <li><a class="buttonMenu" style="color: #F91220;" href="avaliacoes.php">AVALIAÇÕES</a></li>
                </ul>
            </div>
            <div class="headerLeft">
                <img src="../Imagens/Design/LogoCima.svg" class="logoCima">
            </div>
            <div class="headerRight">
                <section class="buttonHeader buttonHeaderCima">
                    <a class="buttonMenu" href="../index.html">HOME</a>
                    <a class="buttonMenu" href="../HTML/exercicios.html">EXERCÍCIOS</a>
                    <a class="buttonMenu" href="../HTML/sobre nos.html">SOBRE NÓS</a>
                    <a class="buttonMenu" href="../HTML/contatos.html">NOSSOS CONTATOS</a>
                    <a class="buttonMenu" href="../HTML/conta.html">CONTA</a>
                    <a class="buttonMenu" style="color: #F91220;" href="avaliacoes.php">AVALIAÇÕES</a>
                </section>
            </div>
            <div class="headerRight1450">
                <section class="buttonHeader buttonHeaderCima" style="margin-top: -11rem;">
                    <a class="buttonMenu" href="../index.html">HOME</a>
                    <a class="buttonMenu" href="../HTML/exercicios.html">EXERCÍCIOS</a>
                    <a class="buttonMenu" href="../HTML/sobre nos.html">SOBRE NÓS</a>
                </section>
                <section class="buttonHeader buttonHeaderCima1450" style="margin-bottom: 2rem;">
                    <a class="buttonMenu" href="../HTML/contatos.html">NOSSOS CONTATOS</a>
                    <a class="buttonMenu" href="../HTML/conta.html">CONTA</a>
                    <a class="buttonMenu" style="color: #F91220;" href="avaliacoes.php">AVALIAÇÕES</a>
                </section>
            </div>
            <div class="buttonHeaderEscondido">
                <button onclick="abrirMenu()" style="background-color: transparent; border: none;"><img
                    src="../Imagens/Design/menu.png" style="width: 5rem; margin-left: 0; " alt="iconeMenu"></button>
            </div>
        </section>

        <section class="txtBlock">
            <h1 class="txtTitulo">Faça a sua avaliação aqui</h1>
            <form action="../PHP/submit_rating.php" method="post">
                <textarea class="textName" name="name" placeholder="Nome"></textarea>
                <textarea class="textbox" name="description" placeholder="Avaliação"></textarea>
            
                <div style="display: flex; flex-direction: column;">
                    <div class="rate divTeste">
                        <input type="radio" id="star1" name="rate" value="5" />
                        <label for="star1" title="text"></label>
                        <input type="radio" id="star2" name="rate" value="4" />
                        <label for="star2" title="text"></label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text"></label>
                        <input type="radio" id="star4" name="rate" value="2" />
                        <label for="star4" title="text"></label>
                        <input type="radio" id="star5" name="rate" value="1" />
                        <label for="star5" title="text"></label>
                    </div>
            
                    <input type="submit" class="buttonEnviar" value="Enviar">
                    <p class="txtDesc" style="margin-top: -3rem; font-size: 2vh;">
                        Seu nome será compartilhado ao realizar uma avaliação.
                    </p>
                </div>
            </form>

            <h1 class="txtTitulo" style="margin-top: 5rem;">Avaliações de nossos membros</h1>
            <?php
            $servername = "localhost";
            $username = "u304537606_miguel";
            $password = ":e9MLQ[@>";
            $dbname = "u304537606_fitnessEstacio";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM tbAvaliacao ORDER BY ID DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $estrelas = $row['ava'];
                    $estrelasCinzas = 5 - $estrelas;

                    echo '<div class="blocoAvaliacao">';
                        echo '<div style="display: flex;">';
                            echo '<p class="txtAvaliacao" style="color: #F91220;">' . $row['nome'] . ' ';
                            for ($i = 0; $i < $estrelas; $i++) {
                                echo '★';
                            }

                            for ($i = 0; $i < $estrelasCinzas; $i++) {
                                echo '☆';
                            }
                            
                            echo '</p>';
                        echo '</div>';

                        echo '<p class="descAvaliacao">' . $row['descricao'] . '</p>';
                    echo '</div>';
                }
            }
            $conn->close();
            ?>
            
            <div class="blocoAvaliacao">
                <div style="display: flex;">
                    <p class="txtAvaliacao" style="color: #F91220;">Miguelindo ★★★★★</p>
                </div>

                <p class="descAvaliacao">A transformação que experimentei desde que me juntei a esta academia é simplesmente incrível! Antes, eu era conhecido como Limpa Mangueira, e agora me chamam de Rei do Suco. Não posso acreditar na minha própria jornada. A equipe da academia é incrível e super profissional. E o suporte que eles oferecem é inigualável! Eu costumava ser tão magro que uma brisa forte poderia me levar embora, mas agora estou mais forte do que nunca. Obrigado a todos na academia por me ajudarem a alcançar meus objetivos! Aqui estão umas fotos do meu progresso:</p>
                
                <section class="imagensAvaliacao" style="display: flex;">
                    <div class="divPequeno" id="divMiguel1">
                        <img class="fotoPequena" src="../Imagens/Evolução/Miguel Antes IA.png" id="imagemMiguel1" onclick="abrirImagem('imagemMiguel1', 'divMiguel1')">
                    </div>

                    <div class="divPequeno" id="divMiguel2">
                        <img class="fotoPequena" src="../Imagens/Evolução/Miguel Depois IA.png" id="imagemMiguel2" onclick="abrirImagem('imagemMiguel2', 'divMiguel2')">
                    </div>
                </section>
            </div>

            <div class="blocoAvaliacao">
                <div style="display: flex;">
                    <p class="txtAvaliacao" style="color: #F91220;">Felipe ★★★★★</p>
                </div>

                <p class="descAvaliacao">Eu costumava ser tão magro que minha sombra pesava mais do que eu. Mas depois que me inscrevi nesta academia, tudo mudou! Os treinadores são simplesmente incríveis e me ajudaram a transformar meu corpo. Estou muito grato por toda a equipe da academia por me ajudar a me tornar a melhor versão de mim mesmo! Agora eu finalmente tenho coragem de postar minhas fotos na internet!</p>
                
                <section class="imagensAvaliacao" style="display: flex;">
                    <div class="divPequeno" id="divFelipe1">
                        <img class="fotoPequena" src="../Imagens/Evolução/Felipe Antes IA Upgrade.jpg" id="imagemFelipe1" onclick="abrirImagem('imagemFelipe1', 'divFelipe1')">
                    </div>

                    <div class="divPequeno" id="divFelipe2">
                        <img class="fotoPequena" src="../Imagens/Evolução/Felipe Depois IA Upgrade.png" id="imagemFelipe2" onclick="abrirImagem('imagemFelipe2', 'divFelipe2')">
                    </div>
                </section>
            </div>

            <div class="blocoAvaliacao">
                <div style="display: flex;">
                    <p class="txtAvaliacao" style="color: #F91220;">Kauã ★★★★★</p>
                </div>

                <p class="descAvaliacao">Minha jornada fitness começou como uma piada. Eu era tão magro que parecia que estava emprestando meus músculos para os esqueletos do Halloween. Mas, graças à orientação incrível desta academia, agora sou o meu próprio super-herói! Esta academia é a verdadeira poção mágica para transformações físicas impressionantes, e a minha transformação foi realmente absurda! Eu tô até parecendo outra pessoa! Estou muito grato por ter encontrado este lugar.</p>
                
                <section class="imagensAvaliacao" style="display: flex;">
                    <div class="divPequeno" id="divKauã1">
                        <img class="fotoPequena" src="../Imagens/Evolução/Kauã Antes.jpg" id="imagemKauã1" onclick="abrirImagem('imagemKauã1', 'divKauã1')">
                    </div>

                    <div class="divPequeno" id="divKauã2">
                        <img class="fotoPequena" src="../Imagens/Evolução/Kauã Depois.jpg" id="imagemKauã2" onclick="abrirImagem('imagemKauã2', 'divKauã2')">
                    </div>
                </section>
            </div>

            <div class="blocoAvaliacao">
                <div style="display: flex;">
                    <p class="txtAvaliacao" style="color: #F91220;">Erik ★★★★★</p>
                </div>

                <p class="descAvaliacao">Minha jornada na Fitness Estácio tem sido uma verdadeira reviravolta na minha vida. Desde a infância, eu era conhecido como o 'garoto comilão' e a comida era minha melhor amiga. Eu nunca pensei que um dia eu pudesse ser o centro das atenções e estar cercado por pessoas que admiram a minha jornada de transformação.
                    <br><br>Graças à equipe incrível da Fitness Estácio, meu estilo de vida mudou completamente. Eles me ensinaram a amar a atividade física tanto quanto eu amava comer, e hoje estou em forma e saudável. Agora, em vez de me esconder em um prato de comida, estou cercado por incríveis mulheres que me apoiam e se inspiram na minha jornada.
                    <br><br>Este site mudou minha vida de uma maneira que eu jamais poderia ter imaginado. E o melhor de tudo, não preciso mais me esconder atrás da comida. Obrigado a todos na academia por me ajudarem a me tornar a melhor versão de mim mesmo!
                </p>
                
                <section class="imagensAvaliacao" style="display: flex;">
                    <div class="divPequeno" id="divErik1">
                        <img class="fotoPequena" src="../Imagens/Evolução/Erik Antes.jpg" id="imagemErik1" onclick="abrirImagem('imagemErik1', 'divErik1')">
                    </div>

                    <div class="divPequeno" id="divErik2">
                        <img class="fotoPequena" src="../Imagens/Evolução/Erik Depois.jpg" id="imagemErik2" onclick="abrirImagem('imagemErik2', 'divErik2')">
                    </div>
                </section>
            </div>
        </section>

        <section class="arealogo">
            <img src="../Imagens/Design/LogoBaixo.svg" id="logoabaixo">
        </section>
    </body>
</html>