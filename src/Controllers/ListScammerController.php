<?php

namespace Hoa1210\CheckScam\Controllers;

use Flarum\Api\Controller\AbstractListController;
use Hoa1210\CheckScam\Scammer;
use Hoa1210\CheckScam\Serializers\ScammerSerializers;
use Psr\Http\Message\ServerRequestInterface;
use Tobscure\JsonApi\Document;

class ListScammerController extends AbstractListController
{

    public $serializer = ScammerSerializers::class;
    protected function data(ServerRequestInterface $request, Document $document)
    {
        return Scammer::all();
    }
}
