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
    <link href="styles/vocabulary.css" rel="stylesheet" />
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
              Vocabulary
            </span>
            <span class="description">Learn and repeat words by topic</span>
          </div>
          <div class="topics">
            <div class="row" style="min-height: 120px;">
              <a class="item medicine" href="vocabulary_info.php">Medicine</a>
              <a class="item music" href="vocabulary_info.php">Music</a>
              <a class="item numbers" href="vocabulary_info.php">Numbers</a>
              <a class="item sport" href="vocabulary_info.php">Sport</a>
            </div>
            <div class="row" style="min-height: 110px;">
              <a class="item weather" href="vocabulary_info.php">Weather</a>
              <a class="item time" href="vocabulary_info.php">Time</a>
              <a class="item criminals" href="vocabulary_info.php">Criminals</a>
            </div>  
            <div class="row" style="min-height: 80px;">
              <a class="item movies" href="vocabulary_info.php">Movies</a>
              <a class="item holidays" href="vocabulary_info.php">Holidays</a>
              <a class="item world" href="vocabulary_info.php">World</a>
            </div>
            <div class="row" style="min-height: 115px;">
              <a class="item computer" href="vocabulary_info.php">Computer</a>
              <a class="item job" href="vocabulary_info.php">Job</a>
              <a class="item food" href="vocabulary_info.php">Food</a>
              <a class="item colours" href="vocabulary_info.php">Colours</a>
            </div>
            <div class="row" style="min-height: 120px;">
              <a class="item family" href="vocabulary_info.php">Family</a>
              <a class="item hobbies" href="vocabulary_info.php">Hobbies</a>
              <a class="item body" href="vocabulary_info.php">Body</a>
              <a class="item animals" href="vocabulary_info.php">Animals</a>
            </div>
          </div>
          <a class="suggest-btn" href="suggest_topic.php">Suggest a topic</a>
          <?php require "footer.php"?>
        </div>
      </div>
    </div>
  </body>
</html>
