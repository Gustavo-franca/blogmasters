



/*colapse texto*/


var invisiblediv = '<div id="collapseText">';
var endinvisiblediv = '</div>';
var collapseButton = '<a  href ="#article-1" id="collapseButtom" > Ler Mais </a> ';
var collapseButton2 = '<a  href ="#article-1"  class ="offset-6 col-6" id="collapseButtom" > Mostrar Menos </a> ';

var article = document.querySelector('article');


insertButtomMais(article);
function insertButtomMais(article){
    var paragrafos = article.querySelectorAll('p');
 
    var contador = 0;
    for (let paragrafo of paragrafos) {
        if (paragrafo.className != 'lead') {
            let string = paragrafo.textContent;
            for(i=0; i < string.length; i++){
                contador++; 
                if(contador == 1200){
                paragrafo = separarParagrafo(paragrafo,i);
                 paragrafo.insertAdjacentHTML('beforeEnd',collapseButton);
                 esconderTexto(paragrafo); 
                 break;//identifico o exato caractere a receber a string
                }
            }
            if(contador == 1200)break; 
        }
    }
    
}
function insertButtomMenos(container){
    container.insertAdjacentHTML('beforeEnd',collapseButton2);
    var buttom = container.querySelector('#collapseButtom');
  
    buttom.addEventListener('click',function (){
        removeButtomMenos(buttom); });
}

function esconderTexto(container){
    var buttom = container.querySelector('#collapseButtom');
    adicionarDiv(container);
    buttom.addEventListener('click',function (even){
        event.preventDefault();
        mostrarTexto(container); 
        removeButtom(buttom);
        unirParagrafos(container);; }); 
}
function mostrarTexto(container){
    container = container.closest('article');
    container = container.querySelector('#collapseText');
    container.className = '';
}
    
function removeButtom(buttom){
    var article = buttom.closest('article');
    buttom.remove();
    insertButtomMenos(article);
}

function removeButtomMenos(buttom){
    var article = buttom.closest('article');
    buttom.remove();
    insertButtomMais(article); 
}

function adicionarDiv(container){
    var div = container.closest('div');
    let esconder;
    if(!div.querySelector('#collapseText')){
         esconder =  div.insertAdjacentHTML('beforeEnd',invisiblediv);
         esconder = div.querySelector('#collapseText');
         var divList = div.querySelectorAll('p');
         var bool = false;
         divList.forEach( elemento => {
             if(elemento.querySelector('#collapseButtom')){
                 bool = true;
             }else if(bool){
                esconder.append(elemento);
             }
         });
    }else{
    esconder = div.querySelector('#collapseText');
    }
    esconder.className = 'collapse';
}

function separarParagrafo(paragrafo,posicao){
    //repartir o paragrafo em duas strings
    var paragrafo1 = paragrafo.textContent.slice(0,posicao);
    var paragrafo2 = paragrafo.textContent.slice(posicao);

    var paragrafo1 =paragrafo1 +'...'; 
    paragrafooculto = document.createElement('p');
    paragrafo2 = document.createTextNode(paragrafo2);
    paragrafooculto.appendChild(paragrafo2);
    paragrafovisualizado = document.createElement('p');
    paragrafo1 = document.createTextNode(paragrafo1);
    paragrafovisualizado.appendChild(paragrafo1);

    console.log("teste de valores");
    console.log(paragrafovisualizado);
    console.log(paragrafooculto);
    console.log(paragrafo);
   
    var div = paragrafo.closest('div');
   
    newparagrafo = paragrafo.insertAdjacentElement('beforebegin',paragrafovisualizado);;
    if(!div.querySelector('#collapseText')){
    paragrafo.insertAdjacentElement('beforebegin',paragrafooculto);
    }else{
        collapseText = div.querySelector('#collapseText');
        collapseText.insertAdjacentElement('afterbegin',paragrafooculto);
    }
    paragrafo.remove();
    return newparagrafo;
}
function unirParagrafos(container){
    string = container.textContent;
    string = string.slice(0,string.length-4);
    paragrafo2 = container.nextElementSibling.firstChild;
    paragrafo = string + paragrafo2.textContent;
    container.textContent = paragrafo;
    paragrafo2.remove();
}

//var paragrafos = article.div.QuerySelectorAll('p');







