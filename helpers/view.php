<?php

function render(string $name, array $data)
{
    require "../views/{$name}";
}