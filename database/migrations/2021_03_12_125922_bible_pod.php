<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BiblePod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('bible_pod')) {
            Schema::create('bible_pod', static function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('bible_id', 12);
                $table->foreign('bible_id')->references('id')->on('bibles')->onDelete('cascade')->onUpdate('cascade');
                $table->boolean('print_ready')->default(0);
                $table->boolean('portion')->default(0);
                $table->tinyInteger('columns')->default(2)->unsigned();
                $table->string('font');
                $table->string('font_bold');
                $table->string('font_format');
                $table->tinyInteger('orphans')->unsigned();
                $table->tinyInteger('widows')->unsigned();
                $table->float('line_height')->unsigned();
                $table->string('counter_style');
                $table->string('justified');
                $table->string('justified_cjk');
                $table->string('description');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bible_pod');
    }
}
