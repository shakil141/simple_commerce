<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMenufacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_menufactures', function (Blueprint $table) {
            $table->bigIncrements('menufacture_id');
            $table->string('manufacture_name',100);
            $table->text('manufacture_description',100);
            $table->tinyInteger('menufacture_status')->default(0)->comment('1=Active/0=InActive');
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
        Schema::dropIfExists('tbl_menufactures');
    }
}
