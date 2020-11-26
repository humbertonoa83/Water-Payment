<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
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
            $table->string('name');
            $table->string('surname');
            $table->string('document_type');
            $table->string('document_name');
            $table->string('email')->unique();
            $table->string('telefone', 15)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('country', 15)->nullable();
            $table->string('nationality', 15)->nullable();

            $table->unsignedBigInteger('employee_type_id');
            $table->foreign('employee_type_id')->references('id')->on('employee_types')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
}
