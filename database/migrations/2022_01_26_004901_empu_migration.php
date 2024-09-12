<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpuMigration extends Migration
{
    private $table = 'empu';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function(Blueprint $table){
            $table->increments('id');
            $table->string('ekspedisi');
            $table->string('pj');
            $table->string('komoditi');
            $table->string('koli');
            $table->dateTime('tanggal');
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
        Schema::dropIfExists($this->table);
    }
}
