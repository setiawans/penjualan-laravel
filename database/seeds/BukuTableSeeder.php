<?php

use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $posts = [
        ['nama_barang'=>'Shampo Pantene', 'harga_jual'=>'20000', 'stok'=>'20', 'harga_jual_pack' => '21000'],
        ['nama_barang'=>'Sabun Detol jeruk', 'harga_jual'=>'18000', 'stok'=>'24', 'harga_jual_pack' => '21000'],
        ['nama_barang'=>'Kopi Luwak', 'harga_jual'=>'10000', 'stok'=>'21', 'harga_jual_pack' => '21000'],
        ['nama_barang'=>'Class Mild', 'harga_jual'=>'8000', 'stok'=>'11', 'harga_jual_pack' => '21000'],
        ['nama_barang'=>'Gula', 'harga_jual'=>'6000', 'stok'=>'16', 'harga_jual_pack' => '21000'],
        ['nama_barang'=>'Teh', 'harga_jual'=>'7000', 'stok'=>'15', 'harga_jual_pack' => '21000'],
        ['nama_barang'=>'Pastta Gigi', 'harga_jual'=>'12000', 'stok'=>'10', 'harga_jual_pack' => '21000']
        ];

      // masukkan data ke database
      DB::table('barang_lara')->insert($posts);
    }
}
