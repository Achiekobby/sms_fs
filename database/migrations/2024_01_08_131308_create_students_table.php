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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->uuid("uuid");
            $table->foreignId("school_id")->nullable();
            $table->foreign("school_id")->references("id")->on("schools")->cascadeOnDelete();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum("gender",["male","female"]);
            $table->string("date_of_birth");
            $table->string("class_name");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
