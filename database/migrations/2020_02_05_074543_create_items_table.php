<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('price');
            $table->string('image');
            $table->string('category');
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->string('description');
            $table->string('sub_category');
            $table->boolean('availabe')->default(1);
            $table->string('brand');
            $table->string('model_no');
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('width')->nullable();
            $table->string('warranty');
            $table->string('model')->nullable();
            $table->integer('vendor_id');
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
        Schema::dropIfExists('items');
    }
}
