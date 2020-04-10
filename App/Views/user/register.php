
        <main >
            <div id="main-title">
            <h1>Seja um Master</h1>
            </div>
            <div id="main">
                <section >
                    <form action="<?php echo 'http://'.APP_HOST.'user/save'?>" method="POST" class="form-register"  >
                        <fieldset class="form-border">
                            <fieldset class="form-grid">
                                <legend>informações De Cadastro</legend>
                                <p><label id = "label-email" for="iEmail">Email: </label>
                                    <input class="field-text" type="text" name="nEmail" id="iEmail" placeholder="Email" maxlength="40">
                                </p>
                                <p> <label for="iPassword">Senha: </label>
                                    <input class="field-text" type="password" name="nPassword" id="iPassword" minlength="8" placeholder="Senha com no minimo 8 digitos" >
                                </p>
                                <p> <label for="iRepPassword"> Repita a Senha: </label>
                                    <input class="field-text" type="password" name="nRepPassword" id="iRepPassword" minlength="8"  placeholder="Repita a senha" >
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
                                <p> <label for="iBirthDate">Data de nascimento: </label>
                                    <input  class="field-text" type="date" name="nBirthDate" id="iBirthDate">
                                </p>
                                <p><label for="iRegion">Regiao: </label>
                                    <select class="field-text" name="nRegion" id="iRegion">
                                    
                                    <option value=""></option>
                                    <option value="1">Sul</option>
                                    <option value="2"> Suldeste</option>
                                    <option value="3"> Centro</option>
                                    <option value="4"> Centro-oeste</option>
                                    <option value="5"> Norte</option>
                                    <option value="6"> Nordeste</option>
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
                                <p><textarea class="field-text" name="ndescrition" id="idescrition" maxlength="800" placeholder="Digite aqui ..."></textarea></p>
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
