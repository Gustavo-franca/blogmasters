
function validaForm(formulario){
var contador = 0;
var email = formulario.iEmail;
var senha = formulario.iSenha;
var repSenha = formulario.iRepSenha;
var fistName = formulario.iFistName;
var lastName = formulario.iLastName;
var dateNasc = formulario.iNascDate;
var radio = formulario.nHow;
var regiao = formulario.iRegiao;
if(email.value == "" ||email.value == null ||email.value.indexOf("@") == -1){
    email.className = "field-text field-danger";
    email.focus();
    contador++;
}else{
    email.className = "field-text field-success";

}
if(senha.value ==""| senha.value ==null || senha.value.length < 8){
    senha.className = "field-text field-danger";
    if(contador == 0){
        senha.focus();
    }
    console.log(senha)
    contador++;
}else{
    senha.className =  "field-text field-success";
}
if(repSenha.value ==""| repSenha.value ==null || senha.value != repSenha.value){
    repSenha.className = "field-text field-danger";
    if(contador == 0){
        repSenha.focus();
    }
    contador++;
}else{
    repSenha.className =  "field-text field-success";
}


if(fistName.value ==""| fistName.value ==null ){
    fistName.className = "field-text field-danger";
    if(contador == 0){
        fistName.focus();
    }
    contador++;
}else{
    fistName.className =  "field-text field-success";
}
if(lastName.value ==""| lastName.value ==null ){
    lastName.className = "field-text field-danger";
    if(contador == 0){
        lastName.focus();
    }
    contador++;
}else{
    lastName.className =  "field-text field-success";
}
if(dateNasc.value ==""| dateNasc.value ==null ){
    dateNasc.className = "field-text field-danger";
    if(contador == 0){
        dateNasc.focus();
    }
    contador++;
}else{
    dateNasc.className =  "field-text field-success";
}


var escolharadio = -1;
for(var x = 0 ; x < radio.length; x++){
    if(radio[x].checked){
        escolharadio = x;
        radio.className =  "field-text field-success";
    }
}

if(regiao.value ==''){
    regiao.className = "field-text field-danger";
    if(contador == 0){
        regiao.focus();
    }
    contador++;
}else{
    regiao.className = "field-text field-success";
}


var mensage = document.getElementById('danger-radio');
console.log(mensage.hidden);
if(escolharadio == -1){
    radio.className = "field-text field-danger";
    mensage.hidden= false;  
    if(contador == 0){
        radio[0].focus();
    }
    contador++;
   
}else{
    mensage.hidden= true;
}
if(contador > 0){
    return false;
}

}