<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');            
            $table->Integer('street_number');
            $table->string('street_name');
            $table->string('province');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country');
            $table->string('phone_number',15)->unique();           
            $table->string('email', 100)->unique();
            $table->text('question')->nullable();
            $table->boolean('opt_in')->nullable()->default(false);
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
        Schema::dropIfExists('leads');
    }
}
