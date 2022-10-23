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
        Schema::create('undangan_amplops', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('undangan_id', false, true)->nullable()->default(null);
            $table->bigInteger('layanan_id', false, true)->nullable()->default(null);

            $table->string('alamat')->default(null)->nullable();
            $table->text('keterangan')->default(null)->nullable();

            $table->bigInteger('updated_by', false, true)->nullable()->default(null);
            $table->bigInteger('created_by', false, true)->nullable()->default(null);
            $table->foreign('layanan_id')
                ->references('id')->on('undangan_amplop_layanans')
                ->restrictOnDelete()
                ->cascadeOnUpdate();
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
        Schema::dropIfExists('undangan_amplops');
    }
};
