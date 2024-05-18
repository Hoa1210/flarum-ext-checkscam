<?php

namespace Hoa1210\CheckScam\Controllers;

use Flarum\Api\Controller\AbstractListController;
use Flarum\User\User;
use Hoa1210\CheckScam\Scammer;
use Hoa1210\CheckScam\Serializers\ScammerSerializers;
use Illuminate\Support\Arr;
use Psr\Http\Message\ServerRequestInterface;
use Tobscure\JsonApi\Document;

class CreateScammerController extends AbstractListController
{

    public $serializer = ScammerSerializers::class;
    protected function data(ServerRequestInterface $request, Document $document)
    {
        try {
            /**
             * @var User $actor
             */
            $actor = $request->getAttribute('actor');
            $scammer = new Scammer();

            // if (!$actor->isGuest()) {
            //     $scammer->user()->associate($actor);
            // }
            var_dump(Arr::get($request->getParsedBody(), 'data'));

            $scammer->scammer_name = Arr::get($request->getParsedBody(), 'data.attributes.scammerName');
            $scammer->save();

            return $scammer;
        } catch (\Exception $e) {
            // Xử lý lỗi ở đây
            // Ví dụ: Ghi log, gửi email thông báo lỗi, hoặc trả về một phản hồi lỗi khác
            var_dump($e->getMessage(), $e->getCode());
            return false;
        }
    }
}
