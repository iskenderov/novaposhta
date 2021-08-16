<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->string('Ref')->primary();
            $table->integer('SiteKey');
            $table->string('Description',99);
            $table->string('DescriptionRu',99);
            $table->string('ShortAddress')->nullable(true);
            $table->string('ShortAddressRu')->nullable(true);
            $table->string('Phone')->nullable('true');
            $table->string('TypeOfWarehouse',36);
            $table->integer('Number');
            $table->string('CityRef',36);
            $table->float('Longitude',10,7);
            $table->float('Latitude',10,7);
            $table->boolean('PostFinance')->default(0);
            $table->boolean('BicycleParking')->default(0);
            $table->boolean('PaymentAccess')->default(0);
            $table->boolean('POSTerminal')->default(0);
            $table->boolean('InternationalShipping')->default(0);
            $table->boolean('SelfServiceWorkplacesCount')->default(0);
            $table->integer('TotalMaxWeightAllowed');
            $table->integer('PlaceMaxWeightAllowed');
            $table->jsonb('SendingLimitationsOnDimensions');
            $table->jsonb('ReceivingLimitationsOnDimensions');
            $table->jsonb('Reception');
            $table->jsonb('Delivery');
            $table->jsonb('Schedule');
            $table->string('DistrictCode')->nullable(true);
            $table->string('WarehouseStatus')->nullable(true);
            $table->string('WarehouseStatusDate')->nullable(true);
            $table->string('CategoryOfWarehouse')->nullable(true);
            $table->string('Direct')->nullable(true);
            $table->string('RegionCity')->nullable(true);
            $table->integer('WarehouseForAgent')->nullable(true);
            $table->integer('MaxDeclaredCost')->nullable(true);
            $table->string('PostomatFor')->nullable(true);
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
        Schema::dropIfExists('warehouses');
    }
}
