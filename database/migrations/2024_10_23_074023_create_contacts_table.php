<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();  // لإنشاء حقل معرف فريد
            $table->string('name');  // حقل لاسم المستخدم
            $table->string('email');  // حقل لبريد المستخدم
            $table->text('message');  // حقل لرسالة المستخدم
            $table->timestamps();  // لإنشاء حقول لتاريخ الإنشاء والتحديث
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');  // لحذف الجدول إذا كان موجودًا
    }
};
