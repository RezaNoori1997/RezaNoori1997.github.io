<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->integer('current_km')->nullable();
            $table->integer('next_km')->nullable();

            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('center_id')->unsigned();

            $table->string('plaque_2', 2);
            $table->string('plaque_alpha', 1);
            $table->string('plaque_3', 3);
            $table->string('plaque_ir', 2);

            $table->tinyInteger('oil_change')->default(0);
            $table->tinyInteger('gearbox_oil_change')->default(0);
            $table->tinyInteger('differential_oil_change')->default(0);
            $table->tinyInteger('oil_filter_replacement')->default(0);
            $table->tinyInteger('air_filter_replacement')->default(0);
            $table->tinyInteger('wind_adjustment')->default(0);

            $table->integer('payment');

            $table->timestamps();
        });

        Schema::table('services', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('center_id')
                ->references('id')
                ->on('service_centers')
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
        Schema::dropIfExists('services');
    }
}
