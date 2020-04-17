

 
<header>    
                <nav class = "navbar navbar-expand-lg navbar-dark bg-danger">
                    <a class="navbar-brand text-uppercase" href="<?php echo 'http://'. APP_HOST?>home">BLOG MAsters</a>
                    <button class = "navbar-toggler" type ="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class ="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id ="navbarSupportedContent">
                        
                        <ul class="col-12 navbar-nav justify-content-end">
                            <li class = "nav-item "><a class="nav-link <?php if($viewVar['nameController'] == 'HomeController')echo 'active'; ?>" href="<?php echo 'http://'. APP_HOST?>home">Home</a></li>
                            <li class = "nav-item"><a class = "nav-link <?php if($viewVar['nameController'] == 'RankingController')echo 'active'; ?>" href="<?php echo 'http://'. APP_HOST?>ranking">Ranking</a></li>
                            <li class = "nav-item "><a class = "nav-link <?php if($viewVar['nameController'] == 'AboutController')echo 'active'; ?>" href="<?php echo 'http://'. APP_HOST?>about">Sobre</a></li> 
                            <li class ="nav-item "><a class="nav-link <?php if($viewVar['nameAction'] == 'register')echo 'active'; ?>" href="<?php echo 'http://'. APP_HOST?>user/register">Seja um Master </a></li> 
                            <li class = "nav-item"><a class = "nav-link <?php if($viewVar['nameAction'] == 'login')echo 'active'; ?>" href="<?php echo 'http://'. APP_HOST?>user/login">login</a></li>
                        </ul>
                    </div>
                </nav>
</header>