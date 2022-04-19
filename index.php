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
  <script src="js/script.js"></script>
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
      </div>
      <div class="container-choice">
        <form method="$_POST" action="index.php" class="choices-inner">
          <input type="button" id="btn-option A" class="option">
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