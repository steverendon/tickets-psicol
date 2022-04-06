<?php

namespace Steven\Tickets\Controllers;

use Steven\Tickets\Models\Buyer;
use Steven\Tickets\Views\Render;

class BuyerController
{
    private $render;
    protected $buyer;

    public function __construct()
    {
        $this->render = new Render();
        $this->buyer = new Buyer;
    }

    public function index()
    {
        $this->render->show('buyer', [
            'buyers' => $this->buyers->all(),
        ]);
    }

    public function store(array $data)
    {
        $this->buyer->create($data);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function edit(array $data)
    {
        $buyer = $this->buyer->find($data['id']);

        $this->render->show('updateBuyer', [
            'buyer' => $buyer,
        ]);
    }

    public function update(array $data)
    {
        $this->buyer->update($data);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function destroy(array $data)
    {
        $this->buyer->delete($data['id']);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}