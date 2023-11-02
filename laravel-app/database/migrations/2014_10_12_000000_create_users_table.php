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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tel');
            $table->boolean('is_admin');
            $table->boolean('sex')->default(1);
            $table->string('birth')->nullable();
            $table->string('date_medic')->nullable();
            $table->string('id_card')->nullable();
            $table->string('work')->nullable();
            $table->string('address')->nullable();
            $table->string('id_message')->nullable();
            $table->string('id_calendar')->nullable();
            $table->string('status')->nullable();
            $table->string('note')->nullable();
            $table->string('deseasecontent')->nullable();
            $table->string('medicinecontent')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
