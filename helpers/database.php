<?php

function env($param)
{
    $config = require '../config.php';

    return $config['database'][$param];
}