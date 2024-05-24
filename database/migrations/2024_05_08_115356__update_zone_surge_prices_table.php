<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateZoneSurgePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('zone_surge_prices')){
            if(!Schema::hasColumn('zone_surge_prices','day')){
                Schema::Table('zone_surge_prices', function(Blueprint $table){
                    $table->string('day')->after('end_time');
                });
            }
        }
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
