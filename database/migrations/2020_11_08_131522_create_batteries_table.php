<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatteriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batteries', function (Blueprint $table) {
            $table->id();

            $table->string('Renata')->nullable();
            $table->string('Energizer_Rayovac_Eveready')->nullable();
            $table->string('Maxell_Panasonic_Sony_Toshiba')->nullable();
            $table->string('Varta')->nullable();
            $table->string('Duracell')->nullable();
            $table->string('Timex')->nullable();
            $table->string('Citizen')->nullable();
            $table->string('SEIKO')->nullable();
            $table->string('Others_bt')->nullable();
            $table->string('Size_DxThick')->nullable();
            $table->string('Capacity')->nullable();
            $table->string('Voltage')->nullable();

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
        Schema::dropIfExists('batteries');
    }
}
