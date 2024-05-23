<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("nombres", 100)->index();
            $table->string("apellidos", 100)->index();
            $table->string("cedula", 10)->unique()->index();
            $table->string("email")->index();
            $table->string("numeroCelular")->index();
            $table->date("fechaContratacion")->index();
            $table->date("fechaDesviculacion")->nullable()->index();

            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->datetimes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
