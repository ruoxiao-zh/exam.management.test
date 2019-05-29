<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('no')->nullable()->comment('考生号');
            $table->bigInteger('exam_registration_number')->nullable()->comment('准考证号');
            $table->string('name')->nullable()->comment('姓名');
            $table->integer('total_points')->default(0)->comment('总分');
            $table->integer('chinese')->default(0)->comment('语文');
            $table->integer('mathematics')->default(0)->comment('数学');
            $table->integer('english')->default(0)->comment('英语');
            $table->integer('science')->default(0)->comment('理科综合');
            $table->integer('arts')->default(0)->comment('文科综合');
            $table->integer('physical_education')->default(0)->comment('体育');
            $table->integer('physicochemical')->default(0)->comment('理化');
            $table->integer('information_technology')->default(0)->comment('信息');
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
        Schema::dropIfExists('results');
    }
}
