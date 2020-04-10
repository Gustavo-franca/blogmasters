<main>
<!-- problemas de CSS -->
       <div class="screen">
             <div class="login-screen background-secundary">
                <div class="login-logo"><h1 class="title-logo"><a href="../index.html"> Blog Masters </a></h1></div>
                <form action="<?php echo 'http://'. APP_HOST?>user/login" method="POST">
                    <fieldset>
                        <legend hidden>Dados De login</legend>
                        <div class="form-div">
                        <label class ="form-label" for="iUser">Nome de usuario</label>
                        <input class ="form-input" type="text" name="userName" id="iUser" required>
                        </div>
                        <div class="form-div">
                            <label class ="form-label" for="iPass">Senha</label>
                            <input class ="form-input" type="password" name="userPass" id="iPass" required>
                        </div>
                        <input class= "btn btn-primary btn-inline mg-top"type="submit" value="Entrar">
                        <a class="btn btn-secundary btn-inline mg-top" href="<?php echo 'http://'. APP_HOST?>user/register">Cadastre-se</a>
                    </fieldset>
                </form>
            </div>
       </div>
 </main>
       <!--<script src="/js/login.js"></script>-->
