<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_user', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedSmallInteger('user_id');
          $table->unsignedSmallInteger('group_id');
          $table->unsignedTinyInteger('created_by')->nullable();
          $table->unsignedTinyInteger('updated_by')->nullable();
          $table->boolean('is_updated')->default(false);
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
        Schema::table('group_user', function (Blueprint $table) {
            //
        });
    }
}
