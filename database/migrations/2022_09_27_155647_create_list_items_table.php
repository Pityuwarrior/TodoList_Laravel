<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //DB táblák és az oszlopok.
        //create('tábla neve',...
        Schema::create('list_items', function (Blueprint $table) {
            //$table->Oszlop_változó(Név);
            $table->id();
            $table->string('name');
            $table->integer('is_complete');
            $table->timestamps();
        });
    }
        // A beállítások sync-elése a DB-vel.
        //$ php artisan migrate:rollback
        //$ php artisan migrate
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_items');
    }
};
