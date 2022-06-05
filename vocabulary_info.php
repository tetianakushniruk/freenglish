<!DOCTYPE html>

<html lang="english">
  <head>
    <title>Vocabulary</title>
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
    <link href="styles/vocabulary_info.css" rel="stylesheet" />
  </head>
  <body>
    <div>
      <div class="vocabulary-container">
        <link href="styles/menu-mobile.css" rel="stylesheet" />
        <div class="vocabulary-page">
          <?php $pageName = 'vocabulary'; require "header.php"?>
          <img
            src="img/ellipses.svg"
            class="ellipses"
          />
          <div class="title">
            <span class="text">
              Weather
            </span>
          </div>
          <div class="word-list">
            <?php
            include 'lab4.php';
            foreach($vocabulary as $key=>$value){ ?>
            <div class="column">
                <span class="text word"><?php echo $key; ?></span>
                <span class="text definition"><?php echo $value; ?></span>
            </div>
            <?php } ?>
          </div>
          <?php require "footer.php"?>
        </div>
      </div>
    </div>
  </body>
</html>
