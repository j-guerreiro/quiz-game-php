//colecao de objetos das perguntas do quiz
const perguntas_quiz = [
  
  //0
  { pergunta: "Quais são as cores da bandeira do G.R.E.S. Estação Primeira de Mangueira?",
  A:"Vermelho e Branco",
  B:"Azul e Branco",
  C:"Verde e Rosa",
  D:"Verde e Amarelo", 
  resposta: "Verde e Rosa"},

  //1
  { pergunta: "Quem criou a primeira marchinha de Carnaval no Brasil?",
  A:"Nelson Sargento",
  B:"Cartola",
  C:"Carmem Miranda",
  D:"Chiquinha Gonzaga", 
  resposta: "Chiquinha Gonzaga"},

  //2
  { pergunta: "Em qual estado brasileiro surgiu o frevo?",
  A:"Rio Grande do Sul",
  B:"Pernambuco",
  C:"Roraima",
  D:"Espírito Santo", 
  resposta:"Pernambuco"},

  //3
  { pergunta: "Qual o significado da palavra Carnaval?",
  A:"Afastar-se da carne",
  B:"Festa da Carne",
  C:"Festa de Dionísio",
  D:"Festa da Folia", 
  resposta: "Afastar-se da carne"},

  //4
  { pergunta: "Em que ano surgiu o trio elétrico no Carnaval de Salvador?",
  A:"1963",
  B:"1950",
  C:"1947",
  D:"1970", 
  resposta: "1950"},

];

//funcao que altera a pergunta ao carregar a pagina
const carregarQuestao = () => {

  const inteiroAleatorio = getInteiroAleatorio();
  const textoPergunta = document.getElementById("question-text");
  textoPergunta.textContent = perguntas_quiz[ inteiroAleatorio ].pergunta;

  const textoAlternativaA = document.getElementById("btn-option A");
  const textoAlternativaB = document.getElementById("btn-option B");
  const textoAlternativaC = document.getElementById("btn-option C");
  const textoAlternativaD = document.getElementById("btn-option D");

  textoAlternativaA.textContent = perguntas_quiz[ inteiroAleatorio ].A;
  textoAlternativaB.textContent = perguntas_quiz[ inteiroAleatorio ].B;
  textoAlternativaC.textContent = perguntas_quiz[ inteiroAleatorio ].C;
  textoAlternativaD.textContent = perguntas_quiz[ inteiroAleatorio ].D;

}

//funcao que gera valores aleatorios para selecionar questoes
const getInteiroAleatorio = () => {
  
  const max = perguntas_quiz.length;
  valor = Math.random() * max;
  valor = valor.toFixed();
  return valor;
}



const responderQuestao = () => {
  
  //capturando texto questao

  const pergunta = document.querySelector(".container-question");
  const perguntaText = pergunta.textContent;

  const btnEnviar = document.getElementById("enviar");

  
  //capturando o texto das alternativas
  const alternativaA = document.getElementById("btn-option A");
  const alternativaB = document.getElementById("btn-option B");
  const alternativaC = document.getElementById("btn-option C");
  const alternativaD = document.getElementById("btn-option D");
  const respostaA = alternativaA.textContent;
  const respostaB = alternativaB.textContent;
  const respostaC = alternativaC.textContent;
  const respostaD = alternativaD.textContent;

  //listener para alternativa selecionada

  alternativaA.addEventListener("click", enviarResposta( respostaA ) );
  //alternativaB.addEventListener("click", enviarResposta( respostaB ) );
  //alternativaC.addEventListener("click", enviarResposta( respostaC ) );
  //alternativaD.addEventListener("click", enviarResposta( respostaD ) );

  //listener para botao enviar
  //btnEnviar.addEventListener("click", enviarResposta() )

  /*
  Ao clicar na alternativa e depois clicar em enviar,
  a resposta selecionada deverá ser comparada ao gabarito, 
  e caso a resposta seja correta, incrementar 10pts à pontuação atual e 
  atualizar a pagina.
  */

}

const enviarResposta = ( valorResposta ) => {
  console.log(valorResposta);
  const perguntaQuiz = document.querySelector(".container-question");
  const textoPerguntaQuiz = perguntaQuiz.textContent;
  const pontos = document.getElementById("display-pontos");


  for ( let i = 0 ; i < perguntas_quiz.length ; i++ ) {
    if ( perguntas_quiz[ i ].pergunta == textoPerguntaQuiz ) {
      if ( perguntaQuiz[ i ].resposta == valorResposta ){
        pergunta.textContent = "PARABÉNS, ACERTOU!";
        pontos.textContent = '100';
        break;
      } else {
        pergunta.textContent = "UMA PENA, MAS ERROU!";
      }
    }
  }

  //se acertar
  //pegar o valor comparar com o gabarito
  //caso esteja certa dar um feedback
  //acrescentar pontos
  //recarregar pagina com nova questao
}

//funcao que atualiza a pagina
const atualizarApp = () => {
  window.location.reload();
}

//carrega a funcao 'carregarQuestao()' ao atualizar o APP ( refresh  F5 )
window.addEventListener("load", carregarQuestao, false);
window.addEventListener("click", responderQuestao);
