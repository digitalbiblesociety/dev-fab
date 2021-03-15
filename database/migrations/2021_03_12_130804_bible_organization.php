<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BibleOrganization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('bible_organization')) {
            Schema::create('bible_organization', static function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('bible_id', 12);
                $table->foreign('bible_id')->references('id')->on('bibles')->onDelete('cascade')->onUpdate('cascade');
                $table->string('organization_id', 12);
                $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade')->onUpdate('cascade');
                $table->string('relationship_type');
                $table->unique(['bible_id', 'organization_id', 'relationship_type']);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bible_organization');
    }
}
