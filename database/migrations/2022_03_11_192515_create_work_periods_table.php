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
        Schema::create('work_periods', function (Blueprint $table) {
            $table->id();
            $table->string("type")->nullable();
            $table->dateTime("start")->nullable();
            $table->dateTime("stop")->nullable();
            $table->bigInteger("weekday_id")->nullable();
            $table->softDeletes();

            $table->foreign('weekday_id')->references('id')->on('weekdays')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_periods');
    }
};
