<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStudiosToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('studios', function (Blueprint $table) {
            $table->text('text')->nullable();
            $table->text('cost')->nullable();
            $table->text('time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('studios', function (Blueprint $table) {
            $table->dropColumn('text');
            $table->dropColumn('cost');
            $table->dropColumn('time');
        });
    }
}
