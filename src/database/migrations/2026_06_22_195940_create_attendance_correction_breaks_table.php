<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceCorrectionBreaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_correction_breaks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('correction_request_id')->constrained('attendance_correction_requests');

            $table->dateTime('before_break_in')->nullable();
            $table->dateTime('before_break_out')->nullable();
            $table->dateTime('after_break_in')->nullable();
            $table->dateTime('after_break_out')->nullable();

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
        Schema::dropIfExists('attendance_correction_breaks');
    }
}
