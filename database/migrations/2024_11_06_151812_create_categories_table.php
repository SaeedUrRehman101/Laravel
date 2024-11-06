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
        Schema::dropIfExists('categories');

        Schema::create('categories', function (Blueprint $table) {
            $table->integer("category_Id")->primary()->autoIncrement();
            $table->string("categoryName",50);
            $table->string("categoryImage",100);
            $table->dropTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::create('categories', function (Blueprint $table) {
            $table->timestamps();
            $table->increments("category_Id"); //both queries work same just one thing is different they assign attr (unsigned) which work for positive "int" means they don't get negitive numbers inthe column
            $table->string("categoryImage",100)->nullable; //means null value except kry ga
        });
    }
};

// Rollback Karna: Agar kabhi aapko migration ko revert (undo) karna ho (using php artisan migrate:rollback), to down() method execute hoga aur timestamps() columns wapas aa jayenge.
