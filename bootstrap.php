<?php

session_start();

require __DIR__ . '/config.php';
require __DIR__ . '/src/error_handler.php';
require __DIR__ . '/src/resolve-route.php';
require __DIR__ . '/src/render.php';
require __DIR__ . '/src/connection.php';
require __DIR__ . '/src/flash.php';

if (resolve('/admin/?(.*)')) {
    require __DIR__ . '/admin/routes.php';
} elseif (resolve('/(.*)')) {
    require __DIR__ . '/site/routes.php';
}
