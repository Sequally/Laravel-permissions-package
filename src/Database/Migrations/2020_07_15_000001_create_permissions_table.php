<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     */
    public function up(): void
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id()->index();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
}
