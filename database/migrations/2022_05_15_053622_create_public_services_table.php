<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_service_id')->references('id')->on('category_services');
            $table->string('name');
            $table->string('slug');
            $table->longText('body')->nullable();
            $table->boolean('is_active')->default(false);
            $table->text('ubicacion');
            $table->string('facebook');
            $table->string('whatsapp');
            $table->string('website');
            $table->foreignId('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('public_services');
    }
}
