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
        Schema::create('passes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 500);
            $table->string('description', 1500);
            $table->decimal('price');
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('passes_id')->nullable()->after('role');
            $table->foreign('passes_id')->references('id')->on('passes')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_passes_id_foreign');
            $table->dropColumn('passes_id');
            });
        Schema::dropIfExists('passes');
    }
};
