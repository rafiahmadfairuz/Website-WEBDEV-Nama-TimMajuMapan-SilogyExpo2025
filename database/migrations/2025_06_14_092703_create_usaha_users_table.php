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
        Schema::create('usaha_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama_usaha');
            $table->enum('sektor', [
                'Makanan',
                'Pertanian',
                'Peternakan',
                'Perikanan',
                'Industri Manufaktur',
                'Jasa Keuangan',
                'Teknologi Informasi dan Komunikasi',
                'Jasa Logistik',
                'Pendidikan',
                'Fesyen dan Tekstil',
                'Jasa',
            ]);
            $table->enum('tipe', ['UMKM', 'PT', 'CV']);
            $table->enum('model', ['Produksi Sendiri', 'Distributor', 'Jasa']);
            $table->enum('status_izin', ['Belum Lengkap', 'Lengkap'])->default('Belum Lengkap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usaha_users');
    }
};
