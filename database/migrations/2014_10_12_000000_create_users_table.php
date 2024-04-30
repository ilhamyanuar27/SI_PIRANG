<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nim',15)->unique();
            $table->string('nama',40);
            $table->string('email',64)->unique();
            $table->string('password',70);
            $table->char('telp',15)->unique();
            $table->enum('role_user',['admin','peminjam'])->default('peminjam');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
