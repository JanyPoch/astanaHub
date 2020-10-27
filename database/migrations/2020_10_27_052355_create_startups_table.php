<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('start_capital')->default(0);
            $table->tinyInteger('investments')->default(0);
            $table->decimal('investments_sum')->nullable();
            $table->integer('city_id');
            $table->string('foundation_year', 4)->default(date('Y'));
            $table->text('description');
            $table->text('problem_solution');
            $table->decimal('sales_sum')->nullable();
            $table->decimal('income')->default(0);
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
        Schema::dropIfExists('startups');
    }
}
