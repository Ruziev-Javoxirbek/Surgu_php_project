<?php

namespace Ssurg\Surgut;

class Request
{
    private $queryParams = [];
    private $method;
    private $path;

    public function __construct()
    {
        // Заполнение массива queryParams из $_GET
        $this->queryParams = $_GET;

        // Установка метода HTTP
        $this->method = $_SERVER['REQUEST_METHOD'];

        // Установка пути запроса
        $this->path = $_SERVER['REQUEST_URI'];
    }

    public function getQueryParams()
    {
        return $this->queryParams;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getPath()
    {
        return $this->path;
    }
}