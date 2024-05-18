<?php

use Illuminate\Database\Schema\Blueprint;

use Flarum\Database\Migration;

return Migration::createTableIfNotExists(
    'scammers',
    function (Blueprint $table) {
        $table->increments('id');
        $table->text('reason')->nullable();
        $table->string('scammer_name')->nullable();
        $table->string('scammer_phone')->nullable();
        $table->string('scammer_email')->nullable();
        $table->string('scammer_bank')->comment('Tên ngân hàng - Số tài khoản (Số thẻ) - Tên người thụ hưởng')->nullable();
        $table->string('scammer_facebook')->nullable();
        $table->boolean('is_owner')->default(true);
        $table->text('description')->nullable();
        $table->unsignedInteger('create_by')->nullable();
        $table->foreign('create_by')
            ->references('id')
            ->on('users')
            ->onDelete('set null');
        $table->timestamps();
        $table->tinyInteger('status')->default(0)->comment('0: pending; 1: accpect; 2: rejected');
    }
);
