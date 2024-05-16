<?php

use Illuminate\Database\Schema\Blueprint;

use Flarum\Database\Migration;

return Migration::createTable(
    'scammer_images',
    function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('scammer_id');
        $table->foreign('scammer_id')
            ->references('id')
            ->on('scammers')
            ->onDelete('set null');
        $table->string('image_path');
    }
);

