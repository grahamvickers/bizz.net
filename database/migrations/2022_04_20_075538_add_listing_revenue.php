<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddListingRevenue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->string('one')->after('city')->nullable();
            $table->string('two')->after('one')->nullable();
            $table->string('three')->after('two')->nullable();
            $table->string('four')->after('three')->nullable();
            $table->string('five')->after('four')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table-dropIfExists('one');
            $table-dropIfExists('two');
            $table-dropIfExists('three');
            $table-dropIfExists('four');
            $table-dropIfExists('five');
        });
    }
}
