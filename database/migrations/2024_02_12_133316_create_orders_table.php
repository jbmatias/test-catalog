<?php

use App\Models\MenuItem;
use App\Models\User;
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
            $table->uuid()->primary();
            $table->foreignIdFor(User::class)                
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate()
                ->after('id');
            $table->float('total');
            $table->string('note');
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
