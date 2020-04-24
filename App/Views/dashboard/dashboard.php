<div class="container-fluid">
    <div class="row" style="height: 57px;">    
       <div class="col-12 px-0">
            <header>  
               <nav class="fixed-top navbar   border-bottom border-dark  navbar-dark bg-danger justify-content-center ">
                <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                <a class="navbar-brand text-uppercase " href="#">BLOGMASTERS</a>
                <div class="collapse navbar-collapse d-md-none " id="navbarSupportedContent">
                    <ul class="navbar-nav flex-column justify-content-center  w-100  ">
                    <li class="nav-item  ">
                        <a class="nav-link" href="#">Artigos</a>
                    </li>
                    <li class="nav-item active border-top border-dark ">
                        <a class="nav-link " href="#">Relatórios</a>
                    </li>
                    <li class="nav-item border-top border-dark  ">
                        <a class="nav-link" href="#">Comentários</a>
                    </li>
                    <li class="nav-item border-top border-dark  ">
                        <a class="nav-link" href="#">Configurações</a>
                    </li>
                    <li class="nav-item border-top border-bottom border-dark ">
                        <a class="nav-link" href="<?php echo 'http://'. APP_HOST?>dashboard/exit">Sair</a>
                    </li>  
                    </ul>
                <div>
                
               </nav>
            </header>   
        </div>
    </div>
    <div class="row" >
    
        <div class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-2 bg-danger px-0 d-none d-md-block" style="height:100vh;">
            <div class="row mx-0">
                <div class=" position-fixed col-12 col-xs-12 col-sm-12 col-md-3 col-lg-2 bg-danger px-0 "> 
                    <aside>
                            <nav class=" navbar  navbar-expand-md navbar-dark nav-fill nav-pull  p-0 ">
                                <div class="collapse navbar-collapse ">
                                    <ul class="navbar-nav flex-column justify-content-center  w-100  ">
                                        <li class="nav-item ">
                                            <a class="nav-link " href="#">Artigos</a>
                                        </li>
                                        <li class="nav-item active border-top border-dark ">
                                            <a class="nav-link" href="#">Relatórios</a>
                                        </li>
                                        <li class="nav-item border-top border-dark  ">
                                            <a class="nav-link" href="#">Comentários</a>
                                        </li>
                                        <li class="nav-item border-top border-dark  ">
                                            <a class="nav-link" href="#">Configurações</a>
                                        </li>
                                        <li class="nav-item border-top border-bottom border-dark ">
                                            <a class="nav-link" href="<?php echo 'http://'. APP_HOST?>dashboard/exit">Sair</a>
                                        </li>  
                                    </ul>
                                <div>
                            </nav>
                    </aside> 
                </div>
            </div>
        </div>    
    
        <div class = "col-12 col-xs-12 col-sm-12 col-md-9 col-lg-10  ">
          <?php echo "<h1>Seja Bem vindo ".$_SESSION['user']['fistName']." ".$_SESSION['user']['lastName']."!</h1>"?>   
        <br><br><br><br><br><b><br><br><br><br><br><br><br><br><br><br><br><b><b><br></b></b></b>
        </div>
    </div>
</div>    