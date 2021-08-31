<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->string('business_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('business_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('wedding_covered')->nullable();
            $table->tinyInteger('travel_to_other_cities')->default(0);

            $table->string('price')->nullable();
            $table->string('label')->nullable();

            $table->string('website_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();

            $table->integer('safety_assured')->nullable();
            $table->integer('flexi_sure_policy')->nullable();
            $table->integer('video_meetings')->nullable();
            $table->integer('most_popular')->nullable();
            $table->integer('is_featured')->nullable();

            $table->tinyInteger('status')->default(0);

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('vendors');
    }
}
