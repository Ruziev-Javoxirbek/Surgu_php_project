<?php

namespace Ssurg\Surgut;

class Router
{
    public function match($method, $path)
    {
        return [
            'controller' => 'Ssurg\\Surgut\\YourController',
            'action' => 'index',
        ];
    }
}