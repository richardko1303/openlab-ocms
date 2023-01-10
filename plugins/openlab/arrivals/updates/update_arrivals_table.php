<?php namespace Openlab\Arrivals\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArrivalsTable extends Migration
{
    public function up()
    {
        Schema::table('openlab_arrivals_arrivals', function (Blueprint $table) {
            //$table->timestamp('arrival')->nullable()->change();
            $table->timestamp('arrival')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('openlab_arrivals_arrivals');
    }
}
