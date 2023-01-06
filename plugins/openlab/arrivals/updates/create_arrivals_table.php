<?php namespace Openlab\Arrivals\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArrivalsTable extends Migration
{
    public function up()
    {
        Schema::create('openlab_arrivals_arrivals', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('arrival');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('openlab_arrivals_arrivals');
    }
}
