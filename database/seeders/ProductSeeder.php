<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("products")->insert([
            [
                "name"=>"Oppo Mobile",
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://res.cloudinary.com/dbllx9c6d/image/upload/v1675342529/laravel_ecom/OPPO_bp2y4o.jpg",
            ],
            [
                "name"=>"Panasonic Tv",
                "price"=>"400",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://res.cloudinary.com/dbllx9c6d/image/upload/v1675342826/laravel_ecom/PANASONIC_babyfm.jpg",
            ],
            [
                "name"=>"Sony Tv",
                "price"=>"500",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://res.cloudinary.com/dbllx9c6d/image/upload/v1675343004/laravel_ecom/SONY_hyjngw.jpg",
            ],
            [
                "name"=>"LG Fridge",
                "price"=>"200",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gallery"=>"https://res.cloudinary.com/dbllx9c6d/image/upload/v1675343115/laravel_ecom/LGFRIDGE_xadyni.jpg",
            ]
        ]);
    }
}
