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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id')->unique();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->foreignId('designation_id')->nullable()->constrained('designations','id')->nullOnDelete();
            $table->foreignId('department_id')->nullable()->constrained('departments','id')->nullOnDelete();
            $table->string('gender');
            $table->string('blood_group');
            $table->foreignId('role_id')->nullable()->constrained('roles','id')->nullOnDelete();
            $table->date('date_of_birth');
            $table->integer('phone');
            $table->string('email');
            $table->string('image');
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
        Schema::dropIfExists('employees');
    }
};
