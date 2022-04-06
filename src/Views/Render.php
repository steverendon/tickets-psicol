<?php

namespace Steven\Tickets\Views;

use Steven\Tickets\Exceptions\NotFoundFile;

class Render
{
    public function show(string $view, array $data = []): void
    {
        $path = __DIR__ . '/../../views/' . $view . '.php';

        if (file_exists($path) == false) {
            throw new NotFoundFile('Template [' . $path . '] does not exist.');
        }

        foreach ($data as $key => $value) {
            $$key = $value;
        }

        include $path;
    }

}
