<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrefecturesColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prefectures', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('code')->unique();
            $table->string('pref_name')->nullable();
            $table->string('city_name')->nullable();
            $table->string('city_sub_name')->nullable();
            $table->double('lat',15,10)->nullable();
            $table->double('lng',15,10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prefectures', function (Blueprint $table) {
            $table->string('name');
            $table->dropColumn('code');
            $table->dropColumn('pref_name');
            $table->dropColumn('city_name');
            $table->dropColumn('city_sub_name');
            $table->dropColumn('lat',15,10);
            $table->dropColumn('lng',15,10);
        });
    }
}
