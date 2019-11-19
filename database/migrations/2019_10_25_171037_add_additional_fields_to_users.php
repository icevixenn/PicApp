<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('surname')->after('name');
            $table->string('address');
            $table->string('bio');
            $table->string('website');
            $table->string('user_photo')->default('default-user-image.png');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('surname');
            $table->dropColumn('address');
            $table->dropColumn('bio');
            $table->dropColumn('website');
            $table->dropColumn('user_photo');

        });
    }
}
