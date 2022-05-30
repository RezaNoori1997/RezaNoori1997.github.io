<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_centers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->integer('city_id')->unsigned();

            $table->string('title');
            $table->tinyInteger('status')->default(0);
            $table->text('business_license');
            $table->timestamp('license_verified_at')->nullable();
            $table->integer('votes')->default(0);
            $table->tinyInteger('max_services_in_day')->default(10);

            $table->string('morning_time')->nullable();
            $table->string('noon_time')->nullable();
            $table->string('evening_time')->nullable();
            $table->string('night_time')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('service_centers', function (Blueprint $table) {
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table
                ->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_centers');
    }
}
