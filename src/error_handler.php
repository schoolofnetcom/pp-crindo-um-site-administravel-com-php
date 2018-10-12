<?php

function setInternalServerError($errno = null, $errstr = null, $errfile = null, $errline = null) {
    http_response_code(500);
    echo '<h1>Error</h1>';

    if (!DEBUG) {
        exit;
    }

    if (is_object($errno)) {
        $err = $errno;
        $errno = $err->getCode();
        $errstr = $err->getMessage();
        $errfile = $err->getFile();
        $errline = $err->getLine();
    }

    echo '<span style="font-weigth: bold; color: red">';
    switch ($errno) {
        case E_USER_ERROR:
            echo '<strong>ERROR</strong> [' . $errno . '] ' . $errstr . "<br>\n";
            echo 'Fatal error on line ' . $errline . ' in file ' . $errfile;
            break;

        case E_USER_WARNING:
            echo '<strong>WARNING</strong> [' . $errno . '] ' . $errstr . "<br>\n";
            break;

        case E_USER_NOTICE:
            echo '<strong>NOTICE</strong> [' . $errno . '] ' . $errstr . "<br>\n";
            break;

        default:
            echo 'Unknow error type: [' . $errno . '] ' . $errstr . "<br>\n";
            echo 'On line ' . $errline . ' in file ' . $errfile;
            break;
    }
    echo '</span>';

    echo '<ul>';
    foreach (debug_backtrace() as $error) {
        if (!empty($error['file'])) {
            echo '<li>';
            echo $error['file'] . ':';
            echo $error['line'];
            echo '</li>';
        }
    }
    echo '</ul>';

    exit;
}

set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');
