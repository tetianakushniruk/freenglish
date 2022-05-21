<div class="header-mobile">
    <div class="menu">
        <input id="toggle" type="checkbox">
        <label class="toggle-container" for="toggle">
            <span class="button button-toggle"></span>
        </label>
        <nav class="nav">
            <a class="nav-item <?= $pageName == 'index' ? 'active' : '' ?>" href="index.php">Home</a>
            <a class="nav-item <?= $pageName == 'vocabulary' ? 'active' : '' ?>" href="vocabulary.php">Vocabulary</a>
            <a class="nav-item <?= $pageName == 'grammar' ? 'active' : '' ?>" href="grammar.php">Grammar</span></a>
            <a class="nav-item <?= $pageName == 'tests' ? 'active' : '' ?>" href="tests.php">Tests</a>
        </nav>
    </div>
    <span class="logo">Freenglish</span>
</div>
<div class="header">
    <span class="logo">Freenglish</span>
    <div class="menu">
        <a class="home" href="index.php">Home</a>
        <a class="vocabulary" href="vocabulary.php">Vocabulary</a>
        <a class="grammar" href="grammar.php">Grammar</a>
        <a class="tests" href="tests.php">Tests</a>
    </div>
</div>