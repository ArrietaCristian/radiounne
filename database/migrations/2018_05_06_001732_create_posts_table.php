<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id', true);

            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->string('descripcion', 128)->nullable();
            $table->string('slug', 128)->unique();

            $table->text('titulo');
            $table->string('urlmultimedia')->nullable();
            $table->string('cabeceraimagen')->nullable();
            $table->text('texto');
            $table->enum('status', ['PUBLICADO'=>0, 'BORRADOR'=>1]);
            

            
            
            $table->timestamps();

            //RELACIONES
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                    

            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('posts');
        

        // Schema::dropIfExists('posts');
        // Schema::disableForeignKeyConstraints();
    }
}
