<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('vehiculos', function (Blueprint $table) {
                $table->bigIncrements('id'); //$table->id();
                $table->string('tipo');
                $table->string('descripcion');
                $table->integer('cantidad');	
                $table->string('color');
                $table->string('img');
                $table->string('estado');
                
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
        //
    }
}