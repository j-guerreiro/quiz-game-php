<?php

#banco de questoes e respostas

$alternativa_0 = array(
  "pergunta" => "Quais são as cores da bandeira do G.R.E.S. Estação Primeira de Mangueira?", 
  "A" => "Vermelho e Branco",
  "B" => "Azul e Branco",
  "C" => "Verde e Rosa",
  "D" => "Verde e Amarelo", 
  "resposta" => "Verde e Rosa"
);

$alternativa_1 = array(
  "pergunta" => "Quem criou a primeira marchinha de Carnaval no Brasil?",
    "A" => "Nelson Sargento",
    "B" => "Cartola",
    "C" => "Carmem Miranda",
    "D" => "Chiquinha Gonzaga", 
    "resposta" => "Chiquinha Gonzaga"
);

$alternativa_2 = array(
  "pergunta" => "Em qual estado brasileiro surgiu o frevo?",
    "A" => "Rio Grande do Sul",
    "B" => "Pernambuco",
    "C" => "Roraima",
    "D" => "Espírito Santo", 
    "resposta" => "Pernambuco"
);

$alternativa_3 = array(
  "pergunta" => "Qual o significado da palavra Carnaval?",
    "A" => "Afastar-se da carne",
    "B" => "Festa da Carne",
    "C" => "Festa de Dionísio",
    "D" => "Festa da Folia", 
    "resposta" => "Afastar-se da carne"
);

$alternativa_4 = array(
  "pergunta" => "Em que ano surgiu o trio elétrico no Carnaval de Salvador?",
    "A" => "1963",
    "B" => "1950",
    "C" => "1947",
    "D" => "1970", 
    "resposta" => "1950"
);
#--------------------------------------------------------------------------------

#gerando questoes com numeros aleatorios de 0 a 4
$valor = random_int(0,4);

switch ($valor) {
  case 0:
    $questao = $alternativa_0["pergunta"];
    $alternativa_A = $alternativa_0["A"];
    $alternativa_B = $alternativa_0["B"];
    $alternativa_C = $alternativa_0["C"];
    $alternativa_D = $alternativa_0["D"];
    break;

  case 1:
    $questao = $alternativa_1["pergunta"];
    $alternativa_A = $alternativa_1["A"];
    $alternativa_B = $alternativa_1["B"];
    $alternativa_C = $alternativa_1["C"];
    $alternativa_D = $alternativa_1["D"];
    break;

  case 2:
    $questao = $alternativa_2["pergunta"];
    $alternativa_A = $alternativa_2["A"];
    $alternativa_B = $alternativa_2["B"];
    $alternativa_C = $alternativa_2["C"];
    $alternativa_D = $alternativa_2["D"];
    break;

  case 3:
    $questao = $alternativa_3["pergunta"];
    $alternativa_A = $alternativa_3["A"];
    $alternativa_B = $alternativa_3["B"];
    $alternativa_C = $alternativa_3["C"];
    $alternativa_D = $alternativa_3["D"];
    break;

  case 4:
    $questao = $alternativa_4["pergunta"];
    $alternativa_A = $alternativa_4["A"];
    $alternativa_B = $alternativa_4["B"];
    $alternativa_C = $alternativa_4["C"];
    $alternativa_D = $alternativa_4["D"];
    break;
}

#--------------------------------------------------------------------------------

#a construir ...
if($_POST) {

  $respostaSelecionada = $_REQUEST['$alternativa_A'];

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/festa-carnaval.ico"/>
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
          <input type="radio" id="btn-option A" name="alternativa" class="option" value="<?php echo $_GET["$alternativa_A"]; ?>" required>
          <label for="btn-option A" id="btn-option A" class="option"><?php echo "{$alternativa_A}" ?></label>
          <input type="radio" id="btn-option B" name="alternativa" class="option" required>
          <label for="btn-option B" id="btn-option B" class="option"><?php echo "{$alternativa_B}" ?></label>
          <input type="radio" id="btn-option C" name="alternativa" class="option" required>
          <label for="btn-option C" id="btn-option C" class="option"><?php echo "{$alternativa_C}" ?></label>
          <input type="radio" id="btn-option D" name="alternativa" class="option" required>
          <label for="btn-option D" id="btn-option D" class="option"><?php echo "{$alternativa_D}" ?></label>
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
  <?php echo "{$respostaSelecionada}"?>
  </footer>
</body>

</html>