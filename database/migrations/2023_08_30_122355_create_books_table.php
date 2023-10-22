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
            //dibawah untuk buat field atau collumn table melalui migration
            $table->id();
            $table->string('isbn',13);//jgn pake upper case untuk nama field
            $table->string('title',250);
            $table->string('author',150);
            $table->string('image_path',100)->nullable(); 
            $table->string('publisher',50);
            $table->string('category',50);
            $table->bigInteger('pages')->unsigned(); //unsugened untuk supaya tidak terbaca field dua kali
            $table->string('language',20);
            $table->timestamp('publish_date');//kalau ada custom nama fielnya jangan pake s timestamp gitu
            $table->string('subjects',50);
            $table->text('desc');

            $table->timestamps();
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
