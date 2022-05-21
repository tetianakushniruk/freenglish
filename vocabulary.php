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
              <div class="item medicine">Medicine</div>
              <div class="item music">Music</div>
              <div class="item numbers">Numbers</div>
              <div class="item sport">Sport</div>
            </div>
            <div class="row" style="min-height: 110px;">
              <div class="item weather">Weather</div>
              <div class="item time">Time</div>
              <div class="item criminals">Criminals</div>
            </div>  
            <div class="row" style="min-height: 80px;">
              <div class="item movies">Movies</div>
              <div class="item holidays">Holidays</div>
              <div class="item world">World</div>
            </div>
            <div class="row" style="min-height: 115px;">
              <div class="item computer">Computer</div>
              <div class="item job">Job</div>
              <div class="item food">Food</div>
              <div class="item colours">Colours</div>
            </div>
            <div class="row" style="min-height: 120px;">
              <div class="item family">Family</div>
              <div class="item hobbies">Hobbies</div>
              <div class="item body">Body</div>
              <div class="item animals">Animals</div>
            </div>
          </div>
          <div class="suggest-btn">Suggest a topic</div>
          <?php require "footer.php"?>
        </div>
      </div>
    </div>
  </body>
</html>
