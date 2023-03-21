<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('inventories',function(Blueprint $table){
            $table->unsignedInteger('inventory_type_id')->after('user_id');

            $table->foreign('inventory_type_id')->references('id')->on('inventory_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventories',function(Blueprint $table){
            $table->dropForeign(['inventory_type_id']);
            $table->dropColumn('inventory_type_id');
        });
    }
};
