<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearInReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('year_in_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->year('year');
            $table->string('text');
        });

        Artisan::call('db:seed', ['--class' => 'YearInReviewTableSeeder']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('year_in_reviews');
    }
}
