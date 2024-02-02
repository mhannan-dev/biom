<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
			$table->string('title')->unique();
			$table->string('slug');
			$table->string('meta_title');
			$table->string('meta_tags');
			$table->string('meta_description');
			$table->mediumText('description');
			$table->tinyInteger('status')->default(1)->comment('0 Inactive 1 Active');
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
        Schema::dropIfExists('pages');
    }
};


