
        <main >
            <div class = "container-fluid  bg-dark mb-4 " id="main-title">
                <h1 class ="col-12 text-center text-white title-font m-0 ">Seja um Master</h1>
            </div>
            <div class="container">
                <section >
                <div class="row">
                    <div class="offset-lg-2 col-lg-8">
                        <div class="row">
                            <div class="col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-10  border border-danger ">            
                                <form class="needs-validation" novalidade action="<?php echo 'http://'.APP_HOST.'user/save'?>" method="POST" class="form-register"  >
                                    <fieldset class="form-group">
                                        <fieldset class="form-group">
                                            <legend>informações De Cadastro</legend>
                                            <div class="form-group">
                                            <label for="iEmail">Email: </label>
                                            <input class="form-control"  type="email" name="nEmail" id="iEmail" placeholder="Email" maxlength="40">
                                            </div>
                                            <div class="form-group">
                                            <label for="iPassword">Senha: </label>
                                            <input class="form-control" type="password" name="nPassword" id="iPassword" minlength="8" placeholder="Senha com no minimo 8 digitos" >
                                            </div>
                                            <div class="form-group">
                                            <label for="iRepPassword">Repita a Senha: </label>
                                            <input class="form-control" type="password" name="nRepPassword" id="iRepPassword" minlength="8"  placeholder="Repita a senha" >
                                            </div>
                                            
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <legend>Informações Pessoais</legend>
                                            <div class="form-row">
                                                <div class="col-sm-6">
                                                    <label for="iFistName">Nome:</label>
                                                    <input class="form-control" type="text" name="nFistName" id="iFistName"  maxlength="50" placeholder="Nome" >
                                                    <small class= "form-text text-muted">Ex: Pedro, Maria</small>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="iLastName">Sobrenome: </label>
                                                    <input class="form-control" type="text" name="nLastName" id="iLastName" placeholder="Sobrenome" maxlength="40" >
                                                    <small class= "form-text text-muted">Ex: Florentino</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="iBirthDate">Data de nascimento: </label>
                                                <input  class="form-control" type="date" name="nBirthDate" id="iBirthDate">
                                            </div>
                                            <fieldset class = "form-group">
                                            <legend>Endereço</legend>
                                            <label for="iRegion">Regiao: </label>
                                                <select class="form-control" name="nRegion" id="iRegion">
                                                    <option value=""></option>
                                                    <option value="1">Sul</option>
                                                    <option value="2"> Suldeste</option>
                                                    <option value="3"> Centro</option>
                                                    <option value="4"> Centro-oeste</option>
                                                    <option value="5"> Norte</option>
                                                    <option value="6"> Nordeste</option>
                                                </select>
                                            </fieldset> 
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <legend>Como Você nos conheceu?</legend>
                                            <span id="danger-radio" class="field-danger" style="color: red;" hidden> selecione uma opção</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="nHow" id="iPgoogle"  > 
                                                <label class="form-check-label" for="iPgoogle">Pesquisas no Google</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nHow" id="iFriend" >
                                            <label class="form-check-label" for="iFriend">Amigos</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="nHow" id="iRecomend" >
                                            <label class="form-check-label" for="iRecomend">Recomendaçoes de youtubers</label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input"  type="radio" name="nHow" id="iOthers" >
                                            <label class="form-check-label" for="iOthers">Outro</label>
                                            <input class ="invisible" type="text" name="nOthers" id="iTextOthers">
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <legend>Porque você deseja trabalhar com a gente?</legend>
                                            <textarea class="form-control" name="ndescrition" id="idescrition" rows ="5" maxlength="800" placeholder="Digite aqui ..."></textarea></p>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <legend>Anexar Proposta</legend>
                                            <div class="custom-file">
                                            <input class="custom-file-input" type="file" name="nFile" id="iFile " required>
                                            <label class="custom-file-label" for="iFile">Anexar Arquivo ...</label>
                                            <div class="invalid-feedback">Por favor Adicione um Arquivo</div>
                                            </div>
                                        </fieldset>
                                        <div class="row">
                                            <div class="offset-3 col-6">
                                            <input class="btn btn-danger" type="submit" name="submit" value ="Cadastar">
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                </form 
                            </div>
                        </div>   
                    </div>
                </div>
                </section>
            </div>
        </main>
