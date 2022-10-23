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
        Schema::create('undangan_mempelais', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('undangan_id', false, true)->nullable()->default(null);

            $table->string('title')->default(null)->nullable();
            $table->string('foto')->default(null)->nullable();
            $table->string('nama_lengkap')->default(null)->nullable();
            $table->string('nama_panggilan')->default(null)->nullable();
            $table->string('nama_orang_tua')->default(null)->nullable();
            $table->text('alamat')->default(null)->nullable();
            $table->integer('sequence')->default(null)->nullable();

            $table->bigInteger('updated_by', false, true)->nullable()->default(null);
            $table->bigInteger('created_by', false, true)->nullable()->default(null);

            $table->foreign('undangan_id')
                ->references('id')->on('undangans')
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('updated_by')
                ->references('id')->on('users')
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('created_by')
                ->references('id')->on('users')
                ->restrictOnDelete()
                ->cascadeOnUpdate();
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
        Schema::dropIfExists('undangan_mempelais');
    }
};
