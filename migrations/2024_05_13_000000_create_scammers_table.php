<?php

use Illuminate\Database\Schema\Blueprint;

use Flarum\Database\Migration;

return Migration::createTable(
    'scammers',
    function (Blueprint $table) {
        $table->increments('id');
        $table->string('reason');
        $table->string('scammer_name')->unique();;
        $table->string('scammer_phone')->nullable();
        $table->string('scammer_email')->nullable();
        $table->string('scammer_bank')->comment('Tên ngân hàng - Số tài khoản (Số thẻ) - Tên người thụ hưởng');
        $table->string('scammer_facebook')->nullable();
        $table->boolean('is_owner')->default(true);
        $table->string('description')->nullable();
        $table->unsignedInteger('create_by');
        $table->foreign('create_by')
            ->references('id')
            ->on('users')
            ->cascadeOnDelete();
        $table->timestamp('created_at');
        $table->tinyInteger('status')->default(0)->comment('0: pending; 1: accpect; 2: rejected');
    }
);

