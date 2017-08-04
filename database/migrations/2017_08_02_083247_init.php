<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Init extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::table('shrts')->insertGetId(
            [ 'title' => 'test', 'link' => 'anakkos.dev/register', 'shrt' => 'li.te/anakreg']
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shrt', function (Blueprint $table) {
            //
        });
    }
}
