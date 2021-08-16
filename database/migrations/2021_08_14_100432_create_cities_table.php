<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->string('Ref', 36)->primary();
            $table->string('Description', 50);
            $table->string('DescriptionRu', 50);
            $table->jsonb('Delivery');
            $table->string('Area', 36);
            $table->string('SettlementType', 36);
            $table->boolean('IsBranch');
            $table->integer('CityID');
            $table->boolean('SpecialCashCheck');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
