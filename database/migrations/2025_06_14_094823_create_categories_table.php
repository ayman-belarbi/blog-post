<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Category::create(['name' => 'Technology']);
        Category::create(['name' => 'Lifestyle']);
        Category::create(['name' => 'Education']);
        Category::create(['name' => 'Travel']);
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
