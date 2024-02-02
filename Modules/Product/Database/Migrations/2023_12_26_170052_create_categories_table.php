<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->nullable();
            $table->integer('section_id');
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->decimal('discount_amt', 5, 2);
            $table->text('description');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->tinyInteger('status')->comment('1=Active and 0=Inactive')->default('1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
