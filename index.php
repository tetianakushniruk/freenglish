<!DOCTYPE html>

<html lang="english">
<head>
    <title>Freenglish</title>

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
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap"
    />
    <link rel="stylesheet" href="styles/style.css" />
    <link href="styles/main-page.css" rel="stylesheet" />
</head>
<body>
<div>
    <div class="main-page-container">
        <link href="styles/menu-mobile.css" rel="stylesheet" />

        <div class="main-page">
            <?php $pageName = 'index'; require "header.php"?>
            <div class="banner">
                <div class="bg">
                    <span class="logo">Freenglish</span>
                    <span class="slogan1">learn english for free</span>
                    <span class="slogan2">anytime, anywhere!</span>
                    <img
                        src="img/main_illustration.png"
                        class="illustr"
                    />
                </div>
                <a class="btn" href="vocabulary.php">
                    <span class="text">Start studying</span>
                </a>
                <div class="bg-add">
                    <a class="btn" href="vocabulary.php">
                        <span class="text">Start studying</span>
                    </a>
                </div>
                <img
                    src="img/banner-dotted-curve-mobile.svg"
                    class="curve-mob"
                />
            </div>
            <div class="welcome">
                <div class="pink-box"></div>
                <span class="text">
              <span class="text1">Welcome to</span>
              <span class="text2">Freenglish!</span>
            </span>
                <div class="ellipses">
                    <img
                        src="img/ellipse_big.svg"
                        class="big"
                    />
                    <img
                        src="img/ellipse_medium.svg"
                        class="medium"
                    />
                    <img
                        src="img/ellipse_small.svg"
                        class="small"
                    />
                </div>
                <span class="description">
              Here you can improve your English every day with the help of
              theoretical material, as well as tests, puzzles and quizzes
            </span>
            </div>
            <div class="sections">
                <div class="item vocabulary">
                    <div class="icon">
                        <img src="img/voc_icon.png"/>
                    </div>

                    <div class="text">
                        <span class="title">Vocabulary</span>
                        <span class="description">
                  Learn new words to improve your vocabulary to help you
                  communicate well in English.
                </span>
                        <a class="btn" href="vocabulary.php">
                            <span class="explore">Explore</span>
                        </a>
                    </div>
                </div>
                <div class="item grammar">
                    <div class="icon">
                        <img src="img/gram_icon.png" />
                    </div>
                    <div class="item text">
                        <span class="title">Grammar</span>
                        <span class="description">
                  Revise and practise your grammar to improve your language level.
                </span>
                        <a class="btn" href="grammar.php">
                            <span class="explore" >Explore</span>
                        </a>
                    </div>
                </div>
                <div class="item tests">
                    <div class="icon">
                        <img src="img/test_icon.png" />
                    </div>
                    <div class="text">
                        <span class="title">Tests</span>
                        <span class="description">
                  Practise your reading, writing, listening and speaking skills at
                  your level.
                </span>
                        <a class="btn" href="tests.php">
                            <span class="explore">Explore</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mobile-app">
                <img
                    src="img/phone_illustration.png"
                    class="illustr"
                />
                <div class="content">
                    <img class="curve" />
                    <span class="study">Study</span>
                    <div class="slogan">
                        <div class="any">
                            <span class="text1">ANY</span>
                            <span class="text3">ANY</span>
                        </div>
                        <div class="green-box">
                            <span class="text2">TIME</span>
                            <span class="text4">WHERE</span>
                        </div>
                    </div>
                    <span class="description">
                Download the mobile application to have constant access to the
                service
              </span>
                    <div class="mob-app">
                        <img
                            src="img/googleplayicon.png"
                            class="googleplay"
                        />
                        <img
                            src="img/appstoreicon.png"
                            class="appstore"
                        />
                    </div>
                </div>
            </div>
            <div class="call-to-action">
                <div class="pink-box"></div>
                <span class="slogan">Make progress with us!</span>
                <span class="description">
              Freenglish will do everything you need to achieve your goals in
              learning English
            </span>
                <a class="btn" href="vocabulary.php">
                    <div class="bg"></div>
                    <span class="text">Start studying</span>
                </a>
            </div>
            <?php require "footer.php"?>
        </div>
    </div>
</div>
</body>
</html>
