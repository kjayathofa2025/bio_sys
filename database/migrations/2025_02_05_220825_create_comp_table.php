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
        Schema::create('comps', function (Blueprint $table) {
            $table->id();
            $table->string('brcode');
            $table->date('compdate')->nullable();
            $table->string('compno');
            $table->string('mobileno');
            $table->string('comptype');
            $table->string('region');
            $table->string('vehtype');
            $table->text('complaints');
            $table->string('respon');
            $table->string('actiontaken');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comps');
    }
};
