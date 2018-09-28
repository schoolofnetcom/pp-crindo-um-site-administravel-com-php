<?php

if (resolve('/admin')) {
    render('admin/home', 'admin');
} elseif (resolve('/admin/pages.*')) {
    include __DIR__ . '/pages/routes.php';
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}
