<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class populateProduct extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => "HAAGEN DAZS MANGO RASPBERRY",
                'price' => 780,
                'category' => "Ice Creams & Desserts",
                'description' => "The superb taste of a mango with a tinge of sharp raspberries that simply awakens your senses and refreshes you on a hot summer day",
                'gallery' => "https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/dbffcc93-9bce-442f-837f-d5d5f073c0c0_425x425.jpg"
            ],
            [
                'name' => "FRESHCON SHREDDED COCONUT 100G - 1 Pc",
                'price' => 40,
                'category' => "Frozen Veg & Non Veg Snacks",
                'description' => "No Description",
                'gallery' => "https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/d2f0e000-0d5f-4153-a8c7-caddb93bb9eb_425x425.jpg"
            ],
            [
                'name' => "YUMMIEZ JUICY CHCKN NUGGETS 500g - 1 Pc",
                'price' => 290,
                'category' => "Frozen Veg & Non Veg Snacks",
                'description' => "No Description",
                'gallery' => "https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/54e219d9-47aa-4821-a360-378e3d716edf_425x425.jpg"
            ],
            [
                'name' => "FRATELLI SANGIOVESE 750ML - 1 Pc",
                'price' => 1050,
                'category' => "Wine & Bear",
                'description' => "Product of : INDIA.FRATELLI SANGIOVESE",
                'gallery' => "https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/97f4b21c-951c-44b8-bd5a-682167eabb8f_425x425.jpg"
            ],
            [
                'name' => "SPRIG TOASTED SESAME OIL 125G - 1 Pc",
                'price' => 399,
                'category' => "Vegetable & Seed Oils",
                'description' => "SPRIG Toasted Sesame Oil is made in small batches, so as to ensure that all the flavor notes are captured beautifully.",
                'gallery' => "https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/697e62e8-a61f-48f8-9d58-fb93b678fd8e_425x425.JPG"
            ],
            [
                'name' => "KW MAGNUM CHOCOTRFFLE STICK 80Ml - 1 Pc",
                'price' => 80,
                'category' => "Ice Creams & Desserts",
                'description' => "Product of : Thailand. Indulge in thick Belgian Chocolate Ice Cream with the Magnum Truffle Ice Cream. Made from finest ingredients, it is a treat for all chocolate lovers.",
                'gallery' => "https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/97e020df-acc1-4b42-bc2c-40160bacf0c0_425x425.jpg"
            ],
            [
                'name' => "RAW PRESSERY PLAIN ALMOND MILK 1LTR - 1 Pc",
                'price' => 295,
                'category' => " Breakfast, Dairy & Bakery",
                'description' => "dairy-free almond milk (unsweetened). Perfect alternative to add to daily shakes, tea, coffee",
                'gallery' => "https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/01aa2454-dea8-43e8-ab12-cec4e653cd10_425x425.jpg"
            ],
            [
                'name' => "Organic Green Cardamom Whole - Healthy Alternatives - 50 g",
                'price' => 575,
                'category' => "Cooking Spices & Powders ",
                'description' => "Cardamoms are an exotic spice from India. Warm, fragrant and mysterious it has a unique and pleasant fragrance. ",
                'gallery' => "https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/11409aa8-48bc-437f-a574-ac2ff5534bb2_425x425.jpg"
            ],
            [
                'name' => "CONSCIOUS FOOD TURMERIC POWDER 100g - 1 Pc",
                'price' => 45,
                'category' => "COOKING SPICES & POWDERS ",
                'description' => "Add an Indian Touch to your favourite dishes with our finest and aromatic Turmeric Powder ",
                'gallery' => "https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/1300428_1_425x425.jpg"
            ],
        ]);
    }
}
