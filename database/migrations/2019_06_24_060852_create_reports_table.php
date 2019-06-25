<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('user_id');
            $table->string('video')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->default('ongoing');
            $table->string('police_id')->nullable();
            $table->text('reply_content')->nullable();
            $table->timestamps();
        });

         Schema::table('reports', function($table) {
            
            $table->foreign('police_id')->references('police_passport_id')->on('police')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('user_id')->references('user_passport_id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
