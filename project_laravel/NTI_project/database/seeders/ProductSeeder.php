<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([

            // ================= Skin Care =================
            [
                'category_id' => 1,
                'name' => 'Gentle Cleanser',
                'description' => 'Cleanse & Refresh',
                'price' => 350,
                'stock' => 100,
                'image' => 'images/skin/cleanser.png',
                'rating' => 5,
                'reviews' => 120,
            ],

            [
                'category_id' => 1,
                'name' => 'Hydrating Serum',
                'description' => 'Hydrate & Illuminate',
                'price' => 480,
                'stock' => 80,
                'image' => 'images/skin/serum.png',
                'rating' => 5,
                'reviews' => 98,
            ],

            [
                'category_id' => 1,
                'name' => 'Daily Moisturizer',
                'description' => 'Nourish & Protect',
                'price' => 420,
                'stock' => 75,
                'image' => 'images/skin/moisturizer.png',
                'rating' => 5,
                'reviews' => 101,
            ],

            [
                'category_id' => 1,
                'name' => 'Mineral Sunscreen',
                'description' => 'Protect & Prevent',
                'price' => 380,
                'stock' => 60,
                'image' => 'images/skin/sunscreen.png',
                'rating' => 5,
                'reviews' => 87,
            ],

            // ================= Hair =================

            [
                'category_id' => 2,
                'name' => 'Nourishing Shampoo',
                'description' => 'Cleanses & Strengthens',
                'price' => 350,
                'stock' => 90,
                'image' => 'images/hair/shampoo.png',
                'rating' => 5,
                'reviews' => 124,
            ],

            [
                'category_id' => 2,
                'name' => 'Repairing Conditioner',
                'description' => 'Nourishes & Repairs',
                'price' => 420,
                'stock' => 80,
                'image' => 'images/hair/conditioner.png',
                'rating' => 5,
                'reviews' => 96,
            ],

            [
                'category_id' => 2,
                'name' => 'Nourishing Hair Oil',
                'description' => 'Deeply Nourishes',
                'price' => 480,
                'stock' => 70,
                'image' => 'images/hair/Hair oil.png',
                'rating' => 5,
                'reviews' => 110,
            ],

            [
                'category_id' => 2,
                'name' => 'Intensive Repair Mask',
                'description' => 'Repairs & Strengthens',
                'price' => 450,
                'stock' => 60,
                'image' => 'images/hair/Hair Mask.png',
                'rating' => 5,
                'reviews' => 89,
            ],

            // ================= Bath & Body =================

            [
                'category_id' => 3,
                'name' => 'Botanical Body Wash',
                'description' => 'Cleanse & Refresh',
                'price' => 320,
                'stock' => 80,
                'image' => 'images/body/body wash.png',
                'rating' => 5,
                'reviews' => 118,
            ],

            [
                'category_id' => 3,
                'name' => 'Gentle Body Scrub',
                'description' => 'Exfoliate & Smooth',
                'price' => 390,
                'stock' => 70,
                'image' => 'images/body/scrub.png',
                'rating' => 5,
                'reviews' => 95,
            ],

            [
                'category_id' => 3,
                'name' => 'Hydrating Body Lotion',
                'description' => 'Deep Hydration',
                'price' => 360,
                'stock' => 90,
                'image' => 'images/body/lotion.png',
                'rating' => 5,
                'reviews' => 132,
            ],

            [
                'category_id' => 3,
                'name' => 'Shea Body Butter',
                'description' => 'Nourish & Soften',
                'price' => 420,
                'stock' => 60,
                'image' => 'images/body/shea butter.png',
                'rating' => 5,
                'reviews' => 109,
            ],

            // ================= Perfume =================

            [
                'category_id' => 4,
                'name' => 'Bloom',
                'description' => 'Floral & Fresh',
                'price' => 520,
                'stock' => 50,
                'image' => 'images/perfume/bloom.png',
                'rating' => 5,
                'reviews' => 112,
            ],

            [
                'category_id' => 4,
                'name' => 'Luna',
                'description' => 'Citrus & Soft',
                'price' => 480,
                'stock' => 50,
                'image' => 'images/perfume/luna.png',
                'rating' => 5,
                'reviews' => 98,
            ],

            [
                'category_id' => 4,
                'name' => 'Oud',
                'description' => 'Woody & Warm',
                'price' => 560,
                'stock' => 40,
                'image' => 'images/perfume/oud.png',
                'rating' => 5,
                'reviews' => 105,
            ],

            [
                'category_id' => 4,
                'name' => 'Velvet',
                'description' => 'Sweet & Elegant',
                'price' => 500,
                'stock' => 45,
                'image' => 'images/perfume/velvet.png',
                'rating' => 5,
                'reviews' => 90,
            ],

        ]);
    }
}
