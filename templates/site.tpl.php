<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/resources/pnotify/pnotify.custom.min.css">
    <link rel="stylesheet" href="/site.css">
</head>
<body>
    <header id="header">
        <h1>Bem vindo a SON</h1>
    </header>

    <ul id="nav">
        <?php foreach ($data['pages'] as $item): ?>
            <li><a href="/<?php echo $item['url']?>"><?php echo $item['title']?></a></li>
        <?php endforeach; ?>
        <li><a href="/contato">Contato</a></li>
    </ul>

    <main id="content">
        <?php include $content; ?>
    </main>

    <p id="footer"><small><?php echo date('Y'); ?> - todos os direitos reservados</small></p>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/resources/pnotify/pnotify.custom.min.js"></script>
    <script>
        <?php flash(); ?>
    </script>
</body>
</html>
