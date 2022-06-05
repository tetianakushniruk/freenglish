<?php $pageName='grammar'?>

<!DOCTYPE html>

<html lang="english">
  <head>
    <title>Grammar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    />
    <link rel="stylesheet" href="styles/style.css" />
    <link href="styles/grammar.css" rel="stylesheet" />
  </head>
  <body>
    <div>
      <div class="grammar-container">
        <link href="styles/menu-mobile.css" rel="stylesheet" />
        <div class="grammar-page">
          <?php $pageName = 'grammar'; require "header.php"?>
          <img
            src="img/ellipses.svg"
            class="ellipses"
          />
          <div class="title">
            <span class="text">Grammar</span>
            <span class="description">
              Learn grammar from tables, schemes and examples
            </span>
          </div>
          <div class="topics">
            <a class="item verbtobe" href="grammar_info.php">
              <div class="logo">
                <span class="text1">
                  <span>Verb</span>
                  <br />
                  <span>to be</span>
                </span>
                <span class="text2">am-is-are</span>
              </div>
              <span class="descr">
                <span>Verb to be</span>
                <br />
                <span>(am, is, are) –</span>
                <br />
                <span>With Usage and Examples</span>
              </span>
            </a>
            <a class="item modalcan" href="grammar_info.php">
              <div class="logo">
                <span class="text1">
                  <span>Modal</span>
                  <br />
                  <span>“Can”</span>
                </span>
              </div>
              <span class="descr">
                Modal “CAN” – With Usage and Examples
              </span>
            </a>
            <a class="item pressimple" href="grammar_info.php">
              <div class="logo">
                <span class="text1">
                  <span>Present</span>
                  <br />
                  <span>Simple</span>
                </span>
                <span class="text2">do-does</span>
              </div>
              <span class="descr">
                <span>Present Simple</span>
                <br />
                <span>– With Usage and Examples</span>
              </span>
            </a>
            <a class="item prescontin" href="grammar_info.php">
              <div class="logo">
                <span class="text1">
                  <span>Present</span>
                  <br />
                  <span>Contin.</span>
                </span>
                <span class="text2">
                  <span>am-is-are</span>
                  <br />
                  <span>+ Ving</span>
                </span>
              </div>
              <span class="descr">
                Present Continuous – With Usage and Examples
              </span>
            </a>
            <a class="item futuresimple" href="grammar_info.php">
              <div class="logo">
                <span class="text1">
                  <span>Future</span>
                  <br />
                  <span>Simple</span>
                </span>
                <span class="text2">will</span>
              </div>
              <span class="descr">
                Future Simple – With Usage and Examples
              </span>
            </a>
            <a class="item pastsimple" href="grammar_info.php">
              <div class="logo">
                <span class="text1">
                  <span>Past</span>
                  <br />
                  <span>Simple</span>
                </span>
                <span class="text2">did</span>
              </div>
              <span class="descr">
                Past Simple – With Usage and Examples
              </span>
            </a>
            <a class="item pastcontin" href="grammar_info.php">
              <div class="logo">
                <span class="text1">
                  <span>Past</span>
                  <br />
                  <span>Contin.</span>
                </span>
                <span class="text2">
                  <span>was-were</span>
                  <br />
                  <span>+ Ving</span>
                </span>
              </div>
              <span class="descr">
                Past Continuous – With Usage and Examples
              </span>
            </a>
            <a class="item presperf" href="grammar_info.php">
              <div class="logo">
                <span class="text1">
                  <span>Present</span>
                  <br />
                  <span>Perfect</span>
                </span>
                <span class="text2">have-has + V3</span>
              </div>
              <span class="descr">
                Present Perfect – With Usage and Examples
              </span>
            </a>
            <a class="item begoingto" href="grammar_info.php">
                <div class="logo">
                  <span class="text1">
                    <span>“Be</span>
                    <br />
                    <span>going</span>
                    <br />
                    <span>to”</span>
                  </span>
                </div>
                <span class="descr">
                  <span>“Be going to” Future Tense –</span>
                  <br />
                  <span>With Usage and Examples</span>
                </span>
            </a>
          </div>
          <?php require "footer.php"?>
        </div>
      </div>
    </div>
  </body>
</html>
