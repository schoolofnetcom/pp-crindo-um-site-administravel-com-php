<?php

require __DIR__ . '/../admin/pages/db.php';

if (resolve('/contato')) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $from = filter_input(INPUT_POST, 'from');
        $subject = filter_input(INPUT_POST, 'subject');
        $message = filter_input(INPUT_POST, 'message');
        $headers = 'From: ' . $from . "\r\n" .
            'Reply-To: ' . $from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if (mail('erik@schoolofnet.com', $subject, $message, $headers)) {
            flash('Email enviado com sucesso', 'success');
        } else {
            flash('Algo deu errado e o email não foi enviado, tente usar o telefone', 'error');
        }

        return header('location: /contato');
    }

    $pages = $pages_all();
    render('site/contato', 'site', compact('pages'));
} elseif ($params = resolve('/(.*)')) {
    $pages = $pages_all();

    foreach ($pages as $page) {
        if ($page['url'] == $params[1]) {
            break;
        }
    }

    render('site/page', 'site', compact('pages', 'page'));
}
