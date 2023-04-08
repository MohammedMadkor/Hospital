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
            $table->string('phone')->unique();
            $table->integer('gender');
            $table->string('image')->nullable();
            $table->integer('age');
            $table->integer('blood_type')->nullable();
            $table->longText('about')->nullable();
            $table->string('national_id')->unique();
            $table->foreignId('shift_id')->nullable()->constrained('shifts')->nullOnDelete()->cascadeOnDelete();
            $table->foreignId('department_id')->nullable()->constrained('departments')->nullOnDelete()->cascadeOnDelete();
            $table->string('address')->nullable();
            $table->integer('salary')->nullable();
            $table->integer('role')->default(0);
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
