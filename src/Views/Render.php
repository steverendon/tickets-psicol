<?php

namespace Steven\Tickets\Views;

use Steven\Tickets\Exceptions\NotFoundFile;

class Render
{
    private static $LAYOUT = 'layout';

    public function show(string $view, array $data = []): void
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        ob_start();
        require $this->buildPath($view);

        $templateContent = ob_get_clean();

        require $this->buildPath(self::$LAYOUT);
    }

    private function buildPath(string $view): string
    {
        $path = __DIR__ . '/../../views/' . $view . '.php';
        
        if (file_exists($path) == false) {
            throw new NotFoundFile('Template [' . $path . '] does not exist.');
        }

        return $path;
    }

}
