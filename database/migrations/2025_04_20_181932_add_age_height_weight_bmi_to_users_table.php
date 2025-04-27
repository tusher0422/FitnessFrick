<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->float('age')->nullable(); // in years
        $table->float('height')->nullable(); // in meters
        $table->float('weight')->nullable(); // in kg
        $table->float('bmi')->nullable();
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['name','email','password','age','height', 'weight', 'bmi']);
    });
}

};
