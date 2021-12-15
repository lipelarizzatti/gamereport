<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pathlogo');
            $table->string('eventdate');
            $table->string('urlfirsttable');
            $table->string('urlsecondtable');
            $table->string('urlthirdtable');
            $table->string('urlfourthtable');
            $table->string('urlbanner');
            $table->string('urlgenericinfo');
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
        Schema::dropIfExists('reports');
    }
}
