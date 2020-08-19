<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->char('id_no', 20)->index();
            $table->enum('title', ['dr', 'prof']);
            $table->string('fullname', 100);
            $table->enum('gender', ['pria', 'wanita']);
            $table->foreignId('doctor_specialist_id')->index();
            $table->string('experience', 50);
            $table->string('education', 100);
            $table->string('str_no', 100);
            $table->string('place', 100);
            $table->string('sip_no', 50);
            $table->enum('status', ['active', 'inactive']);
            $table->char('phone', 15);
            $table->string('email');
            $table->string('password');
            $table->text('description');
            $table->text('photo');
            
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
        Schema::dropIfExists('doctors');
    }
}
