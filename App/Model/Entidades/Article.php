<?php
    namespace App\Model\Entidades;
    
    class Article 
    {
        // deve tratar um texto rebido do banco
        
        function fullarticle(){

            $fullarticle = $this->header();

            $fullarticle .= $this->conteudo();

            $fullarticle .= $this->footer();

            return $fullarticle;
        }
        
        function header(){
            $header = '<article><header><h3>';

            $mainTitle = 'Titulo principal do Artigo';
            
            $header .= $mainTitle.'</h3>';

            $descricao = ' <p class= "decrition-main-title">Descricao do titulo principal(opcional)</p>';
            if($descricao != null ){
                $header .= $descricao;
            }
            $img = '  <figure class="article-img">
            <img src="http://'. APP_HOST.'Public/imagens/narutohokage.jpg" alt="Uma foto do naruto com capa de hokage">
            <figcaption>Foto: Naruto hokage(opcional)</figcaption>
        </figure>';
            if($img != null){
                $header .= $img;
            }

            $header .= '</header>';

            return $header;
        }

        function footer(){
            //nesse caso pode haver apenas um autor
            $footer = '<footer><p class="article-copy">';
            $mainAutor = 'Autor';
            $footer .= $mainAutor;
            // tratar data corretamente
            $date = ',<time datetime="2020-03-20 19:14"> {Data da Postagem}</time></p>';
            $footer .= $date;
            $footer .= '</footer></article>';

            return $footer;
        }
        function conteudo(){
            // aqui tera os subtitulos, paragrafos imagens e etc.
            $conteudo = ' <h4>Subtitulo do Artigo!(opcional)</h4>
            <p class="descrition-sub-title">Descricao do primeiro tópico do artigo(opcional)</p>
            <p> Um tempo atrás eu fiz a análise do filme,<a href="#"> Boruto: O Filme – Análise</a>. E estava devendo uma análise da série, só estava precisando de um tempo para colocar os episódios em dia. Feito isso, vamos à análise!  </p>

            <p> aruto está morto (ou pelo menos é o que se quer dar a entender) e a era dos ninjas acabou!<br>
                Mas essa é só uma chamada impactante para fisgar o fã. Lembra o <a href="#">LINK <a>  
            </p>
            <h4>Subtitulo do Artigo!(opcional)</h4>
            <p class="descrition-sub-title">Descricao do primeiro tópico do artigo(opcional)</p>

            <p> <strong> negrito </strong>
                A cena inicial já avisa que é algo de muitos anos a frente.                
                Então a história em si de Boruto se passa 15 anos após a 4ª Grande Guerra Ninja.                
                Boruto (filho de Hinata e Naruto), Sarada (filha de Sasuke e Sakura) e outros filhos de personagens conhecidos por todos estão na academia ninja.                
            </p>

            <p>  Naruto é o Hokage, Shikamaru seu principal conselheiro. Ocupadíssimo com os deveres de comandar     a    vila, Naruto tem pouco tempo para a família, resultando na revolta de Boruto. Assim como Sasuke nunca está por perto, deixando um vazio para Sarada e Sakura.

            </p> 

            <p>   
                Os episódios iniciais focam esses conflitos familiares e algumas heranças perdidas da guerra e da antiga era ninja. O foco dos conflitos é a nova geração, os medalhões são acionados apenas em casos extremos e muito pontuais.
            </p>';

            return $conteudo;

        }



    }

?>