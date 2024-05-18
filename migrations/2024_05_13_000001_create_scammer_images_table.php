<?php

use Illuminate\Database\Schema\Blueprint;

use Flarum\Database\Migration;

return Migration::createTableIfNotExists(
    'scammer_images',
    function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('scammer_id');
        $table->foreign('scammer_id')
            ->references('id')
            ->on('scammers')
            ->onDelcascadeOnUpdateete();
        $table->string('image_path')->nullable();
    }
);

