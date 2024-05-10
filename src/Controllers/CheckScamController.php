<?php

namespace Controller;

use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface;

class CheckScamController implements RequestHandlerInterface
{
    public function handle(Request $request): Response
    {
        return new HtmlResponse('<h1>Hello, world!</h1>');
    }
}