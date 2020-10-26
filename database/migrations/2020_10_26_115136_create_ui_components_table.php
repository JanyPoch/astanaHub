<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUiComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ui_components', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('key');
            $table->json('rules');
            $table->tinyInteger('active')->default(1);
            $table->string('handler')->default('App\Modules\Ui\ComponentsHandlers\DefaultHandler');
            $table->json('body');
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
        Schema::dropIfExists('ui_components');
    }
}
