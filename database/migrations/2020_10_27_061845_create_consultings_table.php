<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname')->nullable()->default('0');
            $table->string('instagram')->nullable()->default('0');
            $table->string('email')->nullable()->default('0');
            $table->string('phone')->nullable()->default('0');
            $table->string('site')->nullable()->default('0');
            $table->text('activity')->nullable();
            $table->text('services')->nullable();
            $table->text('about_you')->nullable();
            $table->text('about_work')->nullable();
            $table->string('branded_before')->nullable()->default('0');
            $table->string('branded_before_detail')->nullable()->default('0');
            $table->string('fake_follower')->nullable()->default('0');
            $table->string('count_follower')->nullable()->default('0');
            $table->string('conscience')->nullable()->default('0');
            $table->text('expectation')->nullable();

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
        Schema::dropIfExists('consultings');
    }
}
