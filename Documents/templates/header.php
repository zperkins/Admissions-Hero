<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/style.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Admissions Hero: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Admissions Hero</title>
        <?php endif ?>

        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <a href="/"><img alt="Admissions Hero" src="http://www.admissionshero.com/wp-content/uploads/2013/07/logo.jpg"/></a>
            </div>
            <div>
                Welcome, <?php print($_SESSION["name"]);?>
            </div>
            <div id="middle">