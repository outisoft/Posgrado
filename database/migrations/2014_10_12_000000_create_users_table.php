<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *, ['Admin', 'Investigador', 'Coordinador', 'DEFOINVE', 'DI', 'DGIP'])->nullable()
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('rol');
            $table->string('adscripcion');
            $table->string('avatar')->default('default.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('password_code')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
