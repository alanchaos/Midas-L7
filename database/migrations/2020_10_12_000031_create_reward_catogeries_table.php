<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardCatogeriesTable extends Migration
{
    public function up()
    {
        Schema::create('reward_catogeries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->boolean('is_enable')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
