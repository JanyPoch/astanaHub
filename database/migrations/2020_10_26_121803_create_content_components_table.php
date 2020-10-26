<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_components', function (Blueprint $table) {
            $table->id();
            $table->integer('ui_component_id');
            $table->integer('page_id');
            $table->json('body');
            $table->tinyInteger('active')->default(1);
            $table->smallInteger('weight')->default(0);
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
        Schema::dropIfExists('content_components');
    }
}
