<?php
    namespace App\Model\Entities;
    
    class Article 
    {
        // deve tratar um texto rebido do banco
        
        function fullarticle(){

            $fullarticle = $this->header();

            $fullarticle .= $this->content();

            $fullarticle .= $this->footer();

            return $fullarticle;
        }
        
        function header(){
            $header = '<article><header> <div class =" titulo-principal col-12 text-justified"><h3>';

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

            $header .= '</div></header>';

            return $header;
        }

        function footer(){
            //nesse caso pode haver apenas um autor
            $footer = '<footer><p class="article-copy">';
            $mainAuthor = 'Autor';
            $footer .= $mainAuthor;
            // tratar data corretamente
            $date = ',<time datetime="2020-03-20 19:14"> {Data da Postagem}</time></p>';
            $footer .= $date;
            $footer .= '</footer></article>';

            return $footer;
        }
        function content(){
            // aqui tera os subtitulos, paragrafos imagens e etc.
            $content = '
            <div class = "conteudo ">
                <h4>Titulo Secundário</h4>
                <p class ="text-justify">PRIMEIRO PARAGRAFO -Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis enim sit amet laoreet facilisis. Aenean placerat elit neque, vitae bibendum nisl fringilla ac. Mauris maximus in metus consequat euismod. Nullam id odio placerat, varius nisl non, bibendum nulla. Nulla posuere gravida dolor ac semper. Sed libero mauris, dapibus in purus eget, molestie malesuada ante. Vestibulum condimentum placerat ligula, quis tempor erat interdum sit amet. Pellentesque porttitor posuere tellus, id placerat sapien. Suspendisse finibus tincidunt quam pretium sollicitudin. Fusce                 malesuada, quam eget rhoncus tristique, ante orci volutpat orci, et porta augue ligula quis elit. Nulla ac faucibus lorem, faucibus sollicitudin tellus. Etiam lacus leo, aliquet eget urna vel, sagittis ultrices enim. Sed at suscipit nulla, in porttitor est. Aliquam mollis nunc id mi mattis cursus. Phasellus tempus rhoncus consectetur. </p>
                <h4>Titulo Secundário</h4>
                <p class ="text-justify">SEGUNDO Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis enim sit amet laoreet facilisis. Aenean placerat elit neque, vitae bibendum nisl fringilla ac. Mauris maximus in metus consequat euismod. Nullam id odio placerat, varius nisl non, bibendum nulla. Nulla posuere gravida dolor ac semper. Sed libero mauris, dapibus in purus eget, molestie malesuada ante. Vestibulum condimentum placerat ligula, quis tempor erat interdum sit amet. Pellentesque porttitor posuere tellus, id placerat sapien. Suspendisse finibus tincidunt quam pretium sollicitudin. Fusce malesuada, quam eget rhoncus tristique, ante orci volutpat orci, et porta augue ligula quis elit. Nulla ac faucibus lorem, faucibus sollicitudin tellus. Etiam lacus leo, aliquet eget urna vel, sagittis ultrices enim. Sed at suscipit nulla, in porttitor est. Aliquam mollis nunc id mi mattis cursus. Phasellus tempus rhoncus consectetur.</p>
                <p class ="text-justify"> TERCEIROLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis enim sit amet laoreet facilisis. Aenean placerat elit neque, vitae bibendum nisl fringilla ac. Mauris maximus in metus consequat euismod. Nullam id odio placerat, varius nisl non, bibendum nulla. Nulla posuere gravida dolor ac semper. Sed libero mauris, dapibus in purus eget, molestie malesuada ante. Vestibulum condimentum placerat ligula, quis tempor erat interdum sit amet. Pellentesque porttitor posuere tellus, id placerat sapien. Suspendisse finibus tincidunt quam pretium sollicitudin. Fusce malesuada, quam eget rhoncus tristique, ante orci volutpat orci, et porta augue ligula quis elit. Nulla ac faucibus lorem, faucibus sollicitudin tellus. Etiam lacus leo, aliquet eget urna vel, sagittis ultrices enim. Sed at suscipit nulla, in porttitor est. Aliquam mollis nunc id mi mattis cursus. Phasellus tempus rhoncus consectetur.</p>
                <h4>Titulo Secundário</h4>
                <p class ="text-justify">QUARTOLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis enim sit amet laoreet facilisis. Aenean placerat elit neque, vitae bibendum nisl fringilla ac. Mauris maximus in metus consequat euismod. Nullam id odio placerat, varius nisl non, bibendum nulla. Nulla posuere gravida dolor ac semper. Sed libero mauris, dapibus in purus eget, molestie malesuada ante. Vestibulum condimentum placerat ligula, quis tempor erat interdum sit amet. Pellentesque porttitor posuere tellus, id placerat sapien. Suspendisse finibus tincidunt quam pretium sollicitudin. Fusce malesuada, quam eget rhoncus tristique, ante orci volutpat orci, et porta augue ligula quis elit. Nulla ac faucibus lorem, faucibus sollicitudin tellus. Etiam lacus leo, aliquet eget urna vel, sagittis ultrices enim. Sed at suscipit nulla, in porttitor est. Aliquam mollis nunc id mi mattis cursus. Phasellus tempus rhoncus consectetur.</p>
                <p class ="text-justify">QUINTO Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis enim sit amet laoreet facilisis. Aenean placerat elit neque, vitae bibendum nisl fringilla ac. Mauris maximus in metus consequat euismod. Nullam id odio placerat, varius nisl non, bibendum nulla. Nulla posuere gravida dolor ac semper. Sed libero mauris, dapibus in purus eget, molestie malesuada ante. Vestibulum condimentum placerat ligula, quis tempor erat interdum sit amet. Pellentesque porttitor posuere tellus, id placerat sapien. Suspendisse finibus tincidunt quam pretium sollicitudin. Fusce malesuada, quam eget rhoncus tristique, ante orci volutpat orci, et porta augue ligula quis elit. Nulla ac faucibus lorem, faucibus sollicitudin tellus. Etiam lacus leo, aliquet eget urna vel, sagittis ultrices enim. Sed at suscipit nulla, in porttitor est. Aliquam mollis nunc id mi mattis cursus. Phasellus tempus rhoncus consectetur.</p>
                <h4>Titulo Secundário</h4>
                <p class ="text-justify">SEXTOLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis enim sit amet laoreet facilisis. Aenean placerat elit neque, vitae bibendum nisl fringilla ac. Mauris maximus in metus consequat euismod. Nullam id odio placerat, varius nisl non, bibendum nulla. Nulla posuere gravida dolor ac semper. Sed libero mauris, dapibus in purus eget, molestie malesuada ante. Vestibulum condimentum placerat ligula, quis tempor erat interdum sit amet. Pellentesque porttitor posuere tellus, id placerat sapien. Suspendisse finibus tincidunt quam pretium sollicitudin. Fusce malesuada, quam eget rhoncus tristique, ante orci volutpat orci, et porta augue ligula quis elit. Nulla ac faucibus lorem, faucibus sollicitudin tellus. Etiam lacus leo, aliquet eget urna vel, sagittis ultrices enim. Sed at suscipit nulla, in porttitor est. Aliquam mollis nunc id mi mattis cursus. Phasellus tempus rhoncus consectetur.</p>
                <p class ="text-justify">SETIMOLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis enim sit amet laoreet facilisis. Aenean placerat elit neque, vitae bibendum nisl fringilla ac. Mauris maximus in metus consequat euismod. Nullam id odio placerat, varius nisl non, bibendum nulla. Nulla posuere gravida dolor ac semper. Sed libero mauris, dapibus in purus eget, molestie malesuada ante. Vestibulum condimentum placerat ligula, quis tempor erat interdum sit amet. Pellentesque porttitor posuere tellus, id placerat sapien. Suspendisse finibus tincidunt quam pretium sollicitudin. Fusce malesuada, quam eget rhoncus tristique, ante orci volutpat orci, et porta augue ligula quis elit. Nulla ac faucibus lorem, faucibus sollicitudin tellus. Etiam lacus leo, aliquet eget urna vel, sagittis ultrices enim. Sed at suscipit nulla, in porttitor est. Aliquam mollis nunc id mi mattis cursus. Phasellus tempus rhoncus consectetur.</p>
            </div>';

            return $content;

        }



    }

?>