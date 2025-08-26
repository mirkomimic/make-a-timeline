<?php

use App\Models\Timeline;
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
    Schema::create('timeline_items', function (Blueprint $table) {
      $table->id();
      $table->foreignIdFor(Timeline::class);
      $table->string("start")->nullable();
      $table->string("end")->nullable();
      $table->integer("sort_order_num")->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('timeline_items');
  }
};
