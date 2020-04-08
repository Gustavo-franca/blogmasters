<!DOCTYPE html>
<html lang="pt-br">
    <head>
            <meta charset="UTF-8">
            <title>Blog Masters: Mostrando o melhor para você!</title>
            <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header id="header">   
            <h2>BLOG Masters</h2> 
            <nav class="menu">
                <ul>
                    <li><a href="?pagina=cadastro">Seja um Master </a></li> 
                    <li><a href="?pagina=index">Menu</a></li>
                    <li><a href="?pagina=ranking">Ranking</a></li>
                    <li><a href="?pagina=sobre">Sobre</a></li> 
                    <li><a href="?pagina=login">login</a></li>
                </ul>
            </nav>
        </header>
        <main >
            <div id="main-title">
            <h1>Os melhores Posts da semana</h1>
            </div>
            <div id="main">
                <section>
                    <header>
                        <h2>Os melhores Posts Sobre A Blog masters</h2>
                    </header>
                    <article>
                        <h3> Qual a minha ideia para o trabalho?</h3>
                        <h4>Tudo se iniciou com um post aleatório e mal escrito, e agora é um blog</h4>
                        <p> Isso mesmo minha ideia é elaborar um blog com html e css, criando toda a parte de front-end com html e css. para mais informações acesse a nossa página,<a href="paginas/galeria.html"> Sobre</a>.</p>
                    </article>
                </section>
                <section>
                    <h2>Principais Posts</h2>
                    <?php foreach($articles as $article ){
                        echo $article;
                    } ?>
                </section>
                <section>
                    <h2>Principais noticias no Mundo!</h2>
                    <?php foreach($articles as $article ){
                        echo $article;
                    } ?>
                </section>
            </div>
        </main>
        <footer id="footer"> 
            <div id="footer-text">
                <p>&copy;Gustavo Cândido França</p>
                <p>All rigths Reserved@2019</p>
            </div>
        </footer>
    </body>
</html>