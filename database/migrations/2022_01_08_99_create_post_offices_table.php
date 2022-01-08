<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_offices', function (Blueprint $table) {
            // As per http://data.gov.in/sites/default/files/all_india_pin_code.csv
            $table->bigIncrements('id');
            $table->string('office_name');
            $table->string('office_type');// Only 3 character data. So storing as is.

            $table->boolean('delivery_status')
                ->default(1) // Maximum post are with status Delivery as per Indian post API
                ->comment('0: Non-Delivery, 1: Delivery');// Only two possible values are listed

            $table->unsignedBigInteger('pincode_id');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('circle_id');
            $table->unsignedBigInteger('taluk_id');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('state_id');

            $table->timestamps();

            $table->foreign('pincode_id')->references('id')->on('pincodes')->onDelete('cascade');
            $table->foreign('division_id')->references('id')->on('divisions')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->foreign('circle_id')->references('id')->on('circles')->onDelete('cascade');
            $table->foreign('taluk_id')->references('id')->on('taluks')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_offices');
    }
}
