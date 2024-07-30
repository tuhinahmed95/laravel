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
        Schema::create('students', function (Blueprint $table) {
            $table->integer('student_id');
            $table->string('name',30);
            $table->string('email')->unique()->nullable();
            $table->float('percentage',3,2)->comment('Student Percentage');
            $table->primary('student_id');
            $table->string('city')->default('No City');
            $table->integer('age')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
