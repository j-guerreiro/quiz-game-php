<?php

/*
function getInteiroAleatorio($array_perguntas) {

  $max = count($array_perguntas);
  $valor = random_int(0,$max);
  return $valor;

}

//$inteiroAleatorio = getInteiroAleatorio($array_perguntas);


function carregarQuestao($array_perguntas) {
  $textoPergunta = $array_perguntas[];
  return $textoPergunta;
}

*/

$perguntas_quiz = [
  "Quais são as cores da bandeira do G.R.E.S. Estação Primeira de Mangueira?",
  "Quem criou a primeira marchinha de Carnaval no Brasil?",
  "Em qual estado brasileiro surgiu o frevo?",
  "Qual o significado da palavra Carnaval?",
  "Em que ano surgiu o trio elétrico no Carnaval de Salvador?"
];

/*
$perguntas_quiz = array (
  //0
    "questao_0" => array (
      "pergunta" => "<p>Quais são as cores da bandeira do G.R.E.S. Estação Primeira de Mangueira?</p>",
      "A" => "Vermelho e Branco",
      "B" => "Azul e Branco",
      "C" => "Verde e Rosa",
      "D" => "Verde e Amarelo", 
      "resposta" => "Verde e Rosa"
    ),

  //1
  "questao_1" => array (
    "pergunta" => "Quem criou a primeira marchinha de Carnaval no Brasil?",
    "A" => "Nelson Sargento",
    "B" => "Cartola",
    "C" => "Carmem Miranda",
    "D" => "Chiquinha Gonzaga", 
    "resposta" => "Chiquinha Gonzaga"
  ),

  //2
  "questao_2" => array (
    "pergunta" => "Em qual estado brasileiro surgiu o frevo?",
    "A" => "Rio Grande do Sul",
    "B" => "Pernambuco",
    "C" => "Roraima",
    "D" => "Espírito Santo", 
    "resposta" => "Pernambuco"
  ),

  //3
  "questão_3" => array (
    "pergunta" => "Qual o significado da palavra Carnaval?",
    "A" => "Afastar-se da carne",
    "B" => "Festa da Carne",
    "C" => "Festa de Dionísio",
    "D" => "Festa da Folia", 
    "resposta" => "Afastar-se da carne"),

  //4
  "questao_4" => array ( 
    "pergunta" => "Em que ano surgiu o trio elétrico no Carnaval de Salvador?",
    "A" => "1963",
    "B" => "1950",
    "C" => "1947",
    "D" => "1970", 
    "resposta" => "1950"
  )
);

*/


$valor = random_int(0,3);
$questao = $perguntas_quiz[$valor];

if($_POST) {

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/assets/festa-carnaval.ico"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <!-- <script src="js/script.js"></script> -->
  <title>Quiz Game - Carnaval</title>
</head>

<body>
  <main>
    <section class="quiz-section">
      <div class="container-quiz">
        <h1 class="title-game">Quiz Game</h1>
        <h2 class="title-game">Carnaval</h2>
      </div>
      <div class="container-question">
        <p id="question-text" class="question"></p>
        <?php echo "{$questao}"?>
      </div>
      <div class="container-choice">
        <form method="$_POST" action="index.php" class="choices-inner">
          <input type="button" id="btn-option A" class="option">
          <label>
          <input type="button" id="btn-option B" class="option">
          
          <input type="button" id="btn-option C" class="option">
          
          <input type="button" id="btn-option D" class="option">

          <div class="container-btn">
            <button id="display-pontos" class="btn-tentar" type="button">0 pts</button>
            <button id="enviar" class="btn-tentar" type="submit">Enviar Resposta</button>
          </div>
        
        </form>
      </div>
    </section>
  </main>
  <footer class="footer">
    <p class="copyright">Made by <span><a href="https://github.com/j-guerreiro" target="_blank">jguerreiro</a></span> & <span><a href="https://www.linkedin.com/in/sheila-guerreiro-a700a0230/" target="_blank" >sguerreiro</a></span></p>
  </footer>
</body>

</html>