<?php

require __DIR__.'/../vendor/autoload.php';

switch ($_SERVER['REQUEST_URI']) {
    case '/help':
        echo "help".$_GET['var'];
        break;
    case '/calendar':
        echo "calendar";
        break;
    default:
        echo "default";
        break;
}

require '../views/layout.php';

