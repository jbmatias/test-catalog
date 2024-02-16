<?php

use App\Models\Menu;
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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Menu::class)                
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate()
                ->after('id');
            $table->text('name', 100);
            $table->text('description', 1000)->nullable();
            $table->float('price');
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
