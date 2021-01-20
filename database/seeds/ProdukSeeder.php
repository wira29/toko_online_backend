<?php

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            'nama_produk' => Str::random(10),
            'stok' => 2,
            'harga' => 32.000,
            'gambar' => 'kosong.jpg'
        ]);
    }
}
