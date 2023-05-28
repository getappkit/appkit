<?php

use Illuminate\Database\Schema\Blueprint;

return [
    'users' => function (Blueprint $table) {
        $table->text('id');
        $table->string('email');
        $table->string('name')->nullable();
        $table->string('role');
        $table->string('language');
        $table->string('password');
        $table->timestamps();
    },
    'content' => function (Blueprint $table) {
        $table->text('id');
        $table->string('language')->nullable();
        $table->timestamps();
    },
    'pages' => function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('language')->nullable();
        $table->string('parent')->nullable();
        $table->string('slug')->nullable();
        $table->boolean('status')->nullable();
        $table->string('template')->nullable();
        $table->string('title')->nullable();
        $table->json('content')->nullable();
        $table->timestamps();
        $table->softDeletes();
    },
];