<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $category = ['Uncategorized', 'Sci-Fi', 'Novel', 'History', 'Biography', 'Romance', 'Education', 'Culinary', 'Comic'];

        //Asumsikan untuk generate 15 data buku dummy
        for ($i=0; $i < 15; $i++) {
            //Generate isbn dengan 13 digit
            $isbn = $faker->numberBetween(1000000000000, 9999999999999);
            //Generate judul dengan 4 kata
            $judul = $faker->sentence(4);
            //Generate jumlah halaman antara 0 - 500
            $halaman = $faker->numberBetween(0, 500);
            //Generate kategori
            $kategori = $faker->randomElement($category);
            //Generate nama penerbit dengan 3 kata
            $penerbit = $faker->sentence(3);
            $created_at = $faker->dateTimeBetween('-10 days', 'now');

            DB::table('books')->insert([
                'isbn' => $isbn,
                'judul' => $judul,
                'halaman' => $halaman,
                'kategori' => $kategori,
                'penerbit' => $penerbit,
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ]);
        }
    }
}
