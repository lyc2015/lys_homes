<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('price');
            $table->string('address');
            $table->text('nearby')->nullable();
            $table->string('structure');
            $table->double('master_area', 8, 2);
            $table->double('balconies_area', 8, 2);
            $table->string('direction');
            $table->string('house_layout');
            $table->string('completion_time');
            $table->integer('household');
            $table->string('management_mode');
            $table->string('land_rights');
            $table->string('equipment');
            $table->string('other_equipment');
            $table->smallInteger('pet');
            $table->string('communication_environment');
            $table->string('common_equipment');
            $table->integer('monthly_management_price');
            $table->integer('monthly_maintenance_price');
            $table->integer('monthly_others_price');
            $table->enum('purpose', ['sale', 'rent']);
            $table->integer('agent_id');
            $table->timestamps();
            /**
            $table->boolean('featured')->default(false);
            $table->enum('type', ['house', 'apartment']);
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->string('city');
            $table->string('city_slug');
            $table->text('description');
            $table->string('video')->nullable();
            $table->string('floor_plan')->nullable();
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
