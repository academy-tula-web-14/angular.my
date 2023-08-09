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
        Schema::table('employees', function(Blueprint $table){
            $table->string('first_name', 100)->nullable()->change();
            $table->date('birth_date')->nullable()->change();
            $table->integer('level')->nullable()->change();
            $table->boolean('activity')->default(1);
            //$table->decimal('salary', $precision = 8, $scale = 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
