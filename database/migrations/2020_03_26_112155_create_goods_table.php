<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->decimal('price',10,2)->nullable();
            $table->string('num',8)->default('0');
            $table->string('cat_id',55)->nullable();
            $table->text('introduce')->nullable();
            $table->string('logo',128)->nullable();
            $table->enum('is_del',[0,1])->default('0');
            $table->string('cat_one_id',55)->nullable();
            $table->string('cat_two_id',55)->nullable();
            $table->string('cat_three_id',55)->nullable();
            $table->string('hot_num',11)->nullable();
            $table->string('is_promote',55)->nullable();
            $table->string('status',11)->default('1');
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
        Schema::dropIfExists('goods');
    }
}
