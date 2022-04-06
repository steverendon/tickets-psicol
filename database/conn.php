<?php

$connection = new PDO(
    "mysql:host=env('host');dbname=env('database')",
    env('username'),
    env('password')
);