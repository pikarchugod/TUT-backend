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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 10);           // 書名，最多 10 個字
            $table->string('author', 10);          // 作者名稱，最多 10 個字
            $table->string('description', 20)->nullable();  // 書籍簡介，最多 20 個字，可選
            $table->string('image', 255);          // 圖片路徑
            $table->string('status', 10)->default('連載中'); // 狀態，預設值為「連載中」
            $table->integer('views')->default(0);  // 觀看次數，預設 0
            $table->integer('likes')->default(0);  // 按讚次數，預設 0
            $table->integer('favorites')->default(0); // 收藏次數，預設 0
            $table->integer('comments')->default(0);  // 評論次數，預設 0
            $table->timestamps();                // created_at 和 updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
