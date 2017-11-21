<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

  
class CreateUsersTable extends Migration {
  
    public function up() {
        Schema::create( 'usuario' , function(Blueprint $table) {
            $table->increments( 'id' );
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->string( 'name' )->unique();
            $table->string( 'password' , 64 );
            $table->string( 'name' );
        } );
    }
  
    public function down() {
        Schema::drop( 'usuario' );
    }
}