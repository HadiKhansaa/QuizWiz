<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/wordle.css">
    <script src="js/wordle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>QuizWiz : Wordle</title>
</head>

<body>
    <div id="container">
        <div id="game">
            <header >
                <h1 class="title">QUIZWIZ WORDLE</h1>
                <p id="text"></p>
            </header>

            <div id="board-container" style="transform:scale(80%)">
                <div id="board"></div>
            </div>
            <div id="keyboard-container" style="transform:scale(80%)">
                <div class="keyboard-row">
                  <button data-key="q" id="q">q</button>
                  <button data-key="w" id="w">w</button>
                  <button data-key="e" id="e">e</button>
                  <button data-key="r" id="r">r</button>
                  <button data-key="t" id="t">t</button>
                  <button data-key="y" id="y">y</button>
                  <button data-key="u" id="u">u</button>
                  <button data-key="i" id="i">i</button>
                  <button data-key="o" id="o">o</button>
                  <button data-key="p"id="p">p</button>
                </div>
                <div class="keyboard-row">
                  <div class="spacer-half"></div>
                  <button data-key="a"id="a">a</button>
                  <button data-key="s"id="s">s</button>
                  <button data-key="d"id="d">d</button>
                  <button data-key="f"id="f">f</button>
                  <button data-key="g"id="g">g</button>
                  <button data-key="h"id="h">h</button>
                  <button data-key="j"id="j">j</button>
                  <button data-key="k"id="k">k</button>
                  <button data-key="l"id="l">l</button>
                  <div class="spacer-half"></div>
                </div>
                <div class="keyboard-row">
                  <button data-key="enter" class="wide-button" id="Enter">Enter</button>
                  <button data-key="z"id="z">z</button>
                  <button data-key="x"id="x">x</button>
                  <button data-key="c"id="c">c</button>
                  <button data-key="v"id="v">v</button>
                  <button data-key="b"id="b">b</button>
                  <button data-key="n"id="n">n</button>
                  <button data-key="m"id="m">m</button>
                  <button data-key="del" id="Delete" class="wide-button">Del</button>
                </div>
              </div>
            </div>
        </div>
    </div>
</body>
<script>
  document.addEventListener('keydown', (event) => {    
      letter = event.key;
      console.log(letter);

       var key= document.getElementById(letter);
       key.click();
    });
</script>
</html>