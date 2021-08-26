<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrlshortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urlshorts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('short', 5);
            $table->timestamps();

            $table->engine = "InnoDB";


            


           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urlshorts');
    }
}
