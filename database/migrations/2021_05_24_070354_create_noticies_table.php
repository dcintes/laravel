<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticies', function (Blueprint $table) {
            $table->id();
            $table->string('titol', 255);
            $table->unsignedBigInteger('autor_id');
            $table->timestamp('data_publicacio');
            $table->text('contingut');
            $table->string('url_imatge', 255);
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();

            // Afegim les fk
            $table->foreign('autor_id')->references('id')->on('autors');
            $table->foreign('categoria_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('noticies',function(Blueprint $table) {
            // Donam de baixa les fk
			$table->dropForeign('noticies_autor_id_foreign');
            $table->dropForeign('noticies_categoria_id_foreign');
		});

        Schema::dropIfExists('noticies');
    }
}
