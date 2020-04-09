
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
        <header>
        <h2>Principais Posts</h2>
        </header>
        <?php foreach($viewVar['nameArticles'] as $article ){
            echo $article;
        } ?>
    </section>
    <section>
        <header>
        <h2>Principais Posts</h2>
        </header>
        <?php foreach($viewVar['nameArticles'] as $article ){
        echo $article;
        } ?>
    </section>
    </div>
</main>