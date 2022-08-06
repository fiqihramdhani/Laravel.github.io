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
        Schema::create('homes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('T_Home',255);
            $table->string('J_Home',255);
            $table->string('slug',255)->unique();
            $table->text('e_Home',255);
            $table->string('img')->nullable();
            $table->text('B_Home',1000);
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
        Schema::dropIfExists('homes');
    }
};
