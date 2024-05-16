<?php

/*
 * This file is part of hoa1210/flarum-ext-checkscam.
 *
 * Copyright (c) 2024 Luong Hoa.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Hoa1210\CheckScam;

use Flarum\Extend;
use Flarum\Extend\User;
use Hoa1210\CheckScam\Controllers\CreateScammerController;
use Hoa1210\CheckScam\Controllers\DeleteScammerController;
use Hoa1210\CheckScam\Controllers\ListScammerController;
use Hoa1210\CheckScam\Controllers\ShowScammerController;
use Hoa1210\CheckScam\Controllers\UpdateScammerController;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),

    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/less/admin.less'),

    new Extend\Locales(__DIR__.'/locale'),

    (new Extend\Routes('api'))
    ->get('/scammers', 'scammers.index', ListScammerController::class)
    ->post('/scammers', 'scammers.store', CreateScammerController::class)
    ->get('/scammers/{id:[0-9]+}', 'scammers.show', ShowScammerController::class)
    ->put('/scammers/{id:[0-9]+}', 'scammers.update', UpdateScammerController::class)
    ->delete('/scammers/{id:[0-9]+}', 'scammers.delete', DeleteScammerController::class)
];
