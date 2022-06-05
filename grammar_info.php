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
    <link href="styles/grammar_info.css" rel="stylesheet" />
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
              <?php include 'lab4.php'; ?>
              <span class="text">
              <?php echo $grammarVerbToBe->getTopic() ?>
            </span>
            <span class="description">
              With Usage and Examples
            </span>
          </div>
          <div class="content">
            <div class="explanation">
              <?php echo $grammarVerbToBe->getExplanation() ?>
          </div>
            <div class="examples">
              <span class="title">Examples:</span>
              <ul>
                  <?php foreach($grammarVerbToBe->getExamples() as $value){ ?>
                      <li class="example"><?php echo $value; ?>.</li>
                  <?php } ?>
              </ul>
          </div>
            <div class="table formation">
              <span class="title"><?php echo $grammarVerbToBe->getTopic() ?> Formation</span>
              <table>
                  <thead>
                  <tr>
                    <th><p>(+) Affirmative</p></th>
                    <th><p>(-) Negative</p></th>
                    <th><p>(?) Question</p></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $formation = $grammarVerbToBe->getFormation();
                  for($i = 0; $i < 3; $i++){ ?>
                      <tr>
                        <td><p><?php echo $formation['affirmative'][$i]?></p></td>
                        <td><p><?php echo $formation['negative'][$i]?></p></td>
                        <td><p><?php echo $formation['question'][$i]?></p></td>
                      </tr>
                  <?php } ?>
                  </tbody>

              </table>
          </div>
            <div class="table formula">
              <span class="title"><?php echo $grammarVerbToBe->getTopic() ?> Formula</span>
              <table>
                  <thead>
                    <tr>
                      <th><p>(+) Affirmative</p></th>
                      <th><p>(-) Negative</p></th>
                      <th><p>(?) Question</p></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $formula = $grammarVerbToBe->getFormula();
                  for($i = 0; $i < 3; $i++){ ?>
                      <tr>
                        <td><p><?php echo $formula['affirmative'][$i]?></p></td>
                        <td><p><?php echo $formula['negative'][$i]?></p></td>
                        <td><p><?php echo $formula['question'][$i]?></p></td>
                      </tr>
                  <?php } ?>
                  </tbody>

              </table>
          </div>
          </div>
          <?php require "footer.php"?>
        </div>
      </div>
    </div>
  </body>
</html>
