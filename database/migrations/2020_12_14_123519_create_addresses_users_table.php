<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('addresses_users', function (Blueprint $table) {
            $table->foreignId('address_id')->references('id')->on('addresses');
            $table->foreignId('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('addresses_users', function (Blueprint $table) {
          $table->dropForeign(['user_id']);
          $table->dropForeign(['address_id']);
      });
        Schema::dropIfExists('addresses_users');
    }
}
