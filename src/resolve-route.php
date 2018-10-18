<?php

function resolve($route) {
    $path = $_SERVER['PATH_INFO'] ?? '/';

    if (strlen($path) > 1) {
        $path = rtrim($path, '/');
    }

    $route = '/^' . str_replace('/', '\/',$route) . '$/';

    if (preg_match($route, $path, $params)) {
        return $params;
    }

    return false;
}
