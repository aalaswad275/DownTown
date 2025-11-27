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
        Schema::create('landmarks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            // الانه هناك مجموعة من الصور في  جدول اخر وهو Gallery
            $table->json('gallery')->nullable();

            $table->string('address')->nullabe();
            $table->string('location')->nullabe();
            // اذا تم مسح المدنية من الجدول تباقي البيانات
            $table->integer('city_id')->nullable();
            $table->string('category')->nullable();
            $table->json('tags')->nullable();
            // الموقع الجعرافي
            $table->decimal('latitude',10,7)->nullable();
            $table->decimal('longtude',10,7)->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('active')->default(true);
            $table->json('opening_hours')->nullable();
            $table->float('ratings',2,1)->nullabe()->default(0.0);
            $table->integer('views')->default(0);





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landmarks');
    }
};
