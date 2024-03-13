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
        Schema::table('users', function($table) {
            $table->text('bio')->nullable()->after('role');
            $table->text('company_name')->nullable()->after('role');
            $table->text('website')->nullable()->after('role');
            $table->text('facebook')->nullable()->after('role');
            $table->text('twitter')->nullable()->after('role');
            $table->text('instagram')->nullable()->after('role');
            $table->text('linkedin')->nullable()->after('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
