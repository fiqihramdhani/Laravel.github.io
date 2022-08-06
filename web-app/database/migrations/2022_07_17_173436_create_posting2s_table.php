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
        Schema::create('posting2s', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('category_id');
            $table->string('Title1',50);
            $table->string('slug1',255)->unique();
            $table->text('excerpt1',255);
            $table->string('img1',20);
            $table->text('Body1',1000);
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('posting2s');
    }
};
