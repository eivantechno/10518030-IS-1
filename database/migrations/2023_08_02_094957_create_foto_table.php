<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::table('produk', function (Blueprint $table) {
                 $table->renameColumn('stok_produk','stok');
                });
                }

    
    public function down(): void
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->renameColumn('stok', 'stok_produk');
           });

    }