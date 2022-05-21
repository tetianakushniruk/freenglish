<!DOCTYPE html>

<html lang="english">
  <head>
    <title>Tests</title>
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
    <link href="styles/tests.css" rel="stylesheet" />
    <link href="styles/menu-mobile.css" rel="stylesheet" />
  </head>
  <body>
    <div>
      <div class="tests-container">
        <div class="tests-page">
            <?php $pageName = 'tests'; require "header.php"?>
            <img
            src="img/ellipses.svg"
            class="ellipses"
          />
          <div class="title">
            <span class="text">Tests</span>
            <span class="description">
              Find out level of your knowledge with quick, free online test.
            </span>
          </div>
          
          <div class="topics">
            <div class="item forschools-section">
              <div class="ellipse"></div>
              <span class="text">
                <span>For</span>
                <br />
                <span>Schools</span>
              </span>
            </div>
            <div class="item generaleng-section">
              <div class="ellipse"></div>
              <span class="text">
                <span>General</span>
                <br />
                <span>English</span>
              </span>
            </div>
            <div class="item businesseng-section">
              <div class="ellipse"></div>
              <span class="text">
                <span>Business</span>
                <br />
                <span>English</span>
              </span>
            </div>
            <div class="curve">
              <img src="img/curve.svg" />
            </div>
          </div>
          <?php require "footer.php"?>
        </div>
      </div>
    </div>
  </body>
</html>
