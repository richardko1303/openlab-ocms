<?php namespace Openlab\Udaje\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('openlab_udaje_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('meno');
            $table->string('priezvisko');
            $table->integer('vek');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('openlab_udaje_users');
    }
}
