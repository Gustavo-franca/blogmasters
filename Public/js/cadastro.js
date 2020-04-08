/*Neste arquivo vou capturar os dados do formulario de cadsatro e valida-los depois disso irei enviar para a página de cadastro*/ 

/*
var inputs = document.querySelectorall("input[type='text']");

for (let input of inputs){
    if(input.getElementById('#iemail')){
        input.addEventListener("input", validaEmail());
    }else{

    }
}
    
}
    
});
*/
var email = document.querySelector("#iEmail");
if(email.querySelector("#iEmail").value !=null){
    console.log("deu")
}


    console.log("não deu");
 

email.addEventListener("input",function () {
    console.log(email)
    conteudo = email.value;
    verificacao = 0;
    email.className = "field-text field-danger";
  for(i = 0 ; i < conteudo.length; i++){
      if(conteudo[i] == '@'){
          if(verificacao == 0){
          email.className = "field-text field-warning";
          verificacao++;
          }else{
            email.className = "field-text field-danger";
            verificacao++;   
          }
      }else if(conteudo[i] == '.' && verificacao == 1){
        email.className = "field-text field-success";
      }
  }
} );



