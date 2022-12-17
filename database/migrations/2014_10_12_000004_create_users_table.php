<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('alamat')->nullable();
            $table->foreignId('role_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->nullable();
            $table->string('agama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->foreignId('kecamatan_id')->constrained('kecamatan')->cascadeOnDelete()->cascadeOnUpdate()->nullable();
            $table->foreignId('kelurahan_id')->constrained('sub_kecamatan')->cascadeOnDelete()->cascadeOnUpdate()->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('pgl_sensus')->nullable();
            $table->string('foto')->nullable();
            $table->string('password');
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
};
