<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_extension_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->index();
            $table->tinyInteger('type')->default(1);
            $table->string('version', 20)->default('0');
            $table->text('detail')->nullable();
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
        Schema::dropIfExists('admin_extension_histories');
    }
};
