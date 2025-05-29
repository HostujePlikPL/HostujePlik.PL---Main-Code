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
        Schema::create('files', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('original');
            $table->string('filename');
            $table->boolean('status');
            $table->string('hash');
            $table->string('fullpath');
            $table->string('bundle_slug');
            $table->unsignedBigInteger('filesize');
            $table->timestamps(); // utworzy created_at i updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
