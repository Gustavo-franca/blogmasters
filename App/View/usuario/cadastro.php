<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Blog Masters: Mostrando o melhor para você!</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/cadastro.css">
    </head>
<body>
     <header id="header">   
        <h2>BLOG Masters</h2> 
        <h2>BLOG Masters</h2> 
        <h2>BLOG Masters</h2> 
            <nav class="menu">
            <!-- Não irei poder mais mandar direto para view-->
                <ul>
                    <li><a href="?pagina=index">Menu</a></li>
                    <li><a href="?pagina=ranking">Ranking</a></li>
                    <li><a href="?pagina=sobre">Sobre</a></li> 
                    <li><a href="?pagina=login">login</a></li>
                </ul>
            </nav>
            <script src="../js/form.js"></script>
    </header>
        <main >
            <div id="main-title">
            <h1>Seja um Master</h1>
            </div>
            <div id="main">
                <section >
                    <form action="#" method="GET" class="form-register" onsubmit="return validaForm(this);" >
                        <fieldset class="form-border">
                            <fieldset class="form-grid">
                                <legend>informações De Cadastro</legend>
                                <p><label id = "label-email" for="iEmail">Email: </label>
                                    <input class="field-text" type="text" name="nEmail" id="iEmail" placeholder="Email" maxlength="40">
                                </p>
                                <p> <label for="iSenha">Senha: </label>
                                    <input class="field-text" type="password" name="nSenha" id="iSenha" minlength="8" placeholder="Senha com no minimo 8 digitos" >
                                </p>
                                <p> <label for="iRepSenha"> Repita a Senha: </label>
                                    <input class="field-text" type="password" name="nRepSenha" id="iRepSenha" minlength="8"  placeholder="Repita a senha" >
                                </p>
                            </fieldset>
                            <fieldset class="form-grid">
                                <legend>Informações Pessoais</legend>
                                <p><label for="iFistName">Nome:</label>
                                    <input class="field-text"type="text" name="nFistName" id="iFistName"  maxlength="50" placeholder="Nome(Ex: Pedro, Maria)" >
                                    </p>
                                <p><label for="iLastName">Sobrenome: </label>
                                    <input class="field-text" type="text" name="nLastName" id="iLastName" placeholder="Sobrenome(ex: Florentino)" maxlength="40" >
                                </p>
                                <p> <label for="iNascDate">Data de nascimento: </label>
                                    <input  class="field-text" type="date" name="nNascDate" id="iNascDate">
                                </p>
                                <p><label for="iRegiao">Regiao: </label>
                                    <select class="field-text" name="nRegiao" id="iRegiao">
                                    
                                    <option value=""></option>
                                    <option value="sUl">Sul</option>
                                    <option value="suldeste"> Suldeste</option>
                                    <option value="centro"> Centro</option>
                                    <option value="centro-oeste"> Centro-oeste</option>
                                    <option value="norte"> Norte</option>
                                    <option value="nordeste"> Nordeste</option>
                                </select></p>
                            </fieldset>
                            <fieldset class="form-grid">
                                <legend>Como Você nos conheceu?</legend>
                                <span id="danger-radio" class="field-danger" style="color: red;" hidden> selecione uma opção</span>
                                <p> <input type="radio" name="nHow" id="iPgoogle"  > <label for="iPgoogle">Pesquisas no Google</label></p>
                                <p><input type="radio" name="nHow" id="iFriend" ><label for="iFriend">Amigos</label></p>
                                <p><input type="radio" name="nHow" id="iRecomend" ><label for="iRecomend">Recomendaçoes de youtubers</label></p>
                                <p><input type="radio" name="nHow" id="iOthers" ><label for="iOthers">Outro</label>
                                <input type="text" name="nOthers" id="iTextOthers">
                                </p>
                            </fieldset>
                            <fieldset class="form-grid">
                                <legend>porque você deseja trabalhar com a gente?</legend>
                                <p><textarea class="field-text" name="ndescricao" id="idescricao" maxlength="800" placeholder="Digite aqui ..."></textarea></p>
                            </fieldset>
                            <fieldset class="form-grid">
                                <legend>Anexar Proposta</legend>
                                <p> <label class="buttom" id="file-buttom" for="iFile">Anexar Arquivo</label>
                                <input type="file" name="nFile" id="iFile"></p>
                                
                            </fieldset>
                            <input class="buttom" type="submit" name="submit" value ="Cadastar">
                        </fieldset>
                    </form>        
                </form>        
                    </form>        

                </section>
            </div>
        </main>
        <footer id="footer"> 
            <div id="footer-text">
                <p>&copy;Gustavo Cândido França</p>
                <p>All rigths Reserved@2019</p>
            </div>
        </footer>
        <!--<script src="../js/cadastro.js"></script>--> 
        <!--<script src="../js/cadastro.js"></script>--> 
        <!--<script src="../js/cadastro.js"></script>--> 
    </body>
</html>