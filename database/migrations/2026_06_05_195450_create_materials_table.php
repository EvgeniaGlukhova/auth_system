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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // название (лента, упаковка, коробка)
            $table->string('type'); // тип: ribbon, packaging, box
            $table->decimal('price', 10, 2);
            $table->integer('quantity')->default(0);
            $table->foreignId('supplier_id')->nullable()->constrained('suppliers');
            $table->date('expiry_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
