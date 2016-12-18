<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Scaffold_tables.
 *
 * @author  The scaffold-interface created at 2016-12-17 08:47:44pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ScaffoldTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('scaffold_tables',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('Name');
        
        $table->date('born');
        
        $table->boolean('isActive');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('scaffold_tables');
    }
}
