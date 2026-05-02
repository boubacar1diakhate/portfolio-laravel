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
    DB::table('projects')->where('slug', 'teranga-dentaire')
        ->update(['image' => 'images/projects/teranga-dentaire.png']);
    
    DB::table('projects')->where('slug', 'natte-app')
        ->update(['image' => 'images/projects/natte-app.png']);
    
    DB::table('projects')->where('slug', 'red-product')
        ->update(['image' => 'images/projects/red-product.png']);
    
    DB::table('projects')->where('slug', 'cinecritique')
        ->update(['image' => 'images/projects/cinecritique.png']);
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
