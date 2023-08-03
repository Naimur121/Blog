<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('year')->nullable();
            $table->string('fuel_type')->nullable();
            $table->integer('stock')->nullable();
            $table->string('milage')->nullable();
            $table->string('engine')->nullable();
            $table->string('transmission')->nullable();
            $table->string('drive')->nullable();
            $table->string('exterior_color')->nullable();
            $table->string('interior_color')->nullable();
            $table->integer('price')->nullable();
            $table->text('short_description')->nullable();
            $table->longtext('long_description')->nullable();
            $table->text('image')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1=Published,0=Unpublished');
            $table->timestamps();
        });
    }













    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
