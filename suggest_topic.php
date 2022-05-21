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
    <link href="styles/suggest_topic.css" rel="stylesheet" />
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
              Suggest a topic
            </span>
                <span class="description">
                    Here you can suggest your own topic for the vocabulary.
                    We will review your suggestions as soon as possible
                    and create a new selection of words for you.
                </span>
            </div>
            <form action="suggest_topic_post.php" method="POST">
                <textarea class="suggestion" name="suggestion" rows="7"></textarea>
                <button class="suggest-btn" type="submit">Suggest</button>
            </form>

            <?php require "footer.php"?>
        </div>
    </div>
</div>
</body>
</html>
