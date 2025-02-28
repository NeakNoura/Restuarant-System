<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('customerno');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->timestamps(true); // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
};