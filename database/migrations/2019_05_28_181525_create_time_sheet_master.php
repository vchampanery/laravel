<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeSheetMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_sheet_master', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('work_record_id');
            $table->date('log_date');
            $table->time('log_hours');
            $table->longText('activity');
            $table->softDeletes();
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
        Schema::dropIfExists('time_sheet_master');
    }
}
