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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['order', 'sale']); // заказ или продажа
            $table->foreignId('client_id')->nullable()->constrained('clients')->nullOnDelete(); // ID клиента из CRM
            $table->string('client_name')->nullable(); // имя клиента (если не в CRM)
            $table->string('client_phone')->nullable(); // телефон
            $table->date('delivery_date')->nullable(); // дата доставки (для заказа)
            $table->time('delivery_time')->nullable(); // время доставки (для заказа)
            $table->date('assembly_date')->nullable(); // дата сборки (рассчитывается)
            $table->text('delivery_address')->nullable(); //адерс доставки
            $table->enum('status', ['new', 'assembly', 'ready', 'completed', 'cancelled'])->default('new');
            $table->enum('delivery_type', ['pickup', 'delivery'])->default('pickup'); // тип доставки
            $table->decimal('total_amount', 10, 2); // цена общая
            $table->enum('payment_method', ['cash', 'card', 'qr'])->nullable();
            $table->text('comment')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('courier_id')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
