<?php

use Illuminate\Database\Seeder;

class StrainsTaxonomiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Effects
        $effects = [
            [
                'meta_type' => "effects",
                'name'      => "Anxious",
                'slug'      => "anxious",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Creative",
                'slug'      => "creative",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Dizzy",
                'slug'      => "dizzy",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Dry Mouth",
                'slug'      => "dry-mouth",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Energetic",
                'slug'      => "energetic",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Euphoric",
                'slug'      => "euphoric",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Focused",
                'slug'      => "focused",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Happy",
                'slug'      => "happy",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Horny",
                'slug'      => "horny",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Hungry",
                'slug'      => "hungry",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Paranoid",
                'slug'      => "paranoid",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Psychedelic",
                'slug'      => "psychedelic",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Relaxed",
                'slug'      => "relaxed",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Sleepy",
                'slug'      => "sleepy",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Talkative",
                'slug'      => "talkative",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Tingly",
                'slug'      => "tingly",
            ],
            [
                'meta_type' => "effects",
                'name'      => "Uplifted",
                'slug'      => "uplifted",
            ],
        ];

        foreach($effects as $effect) {
            DB::table('strains_taxonomies')->insert($effect);
        }


        // Flavors
        $flavors = [
            [
                'meta_type' => "flavors",
                'name'      => "Ammonia",
                'slug'      => "Ammonia",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Apple",
                'slug'      => "Apple",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Berry",
                'slug'      => "Berry",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Blackberry",
                'slug'      => "Blackberry",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Bleach",
                'slug'      => "Bleach",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Blueberry",
                'slug'      => "Blueberry",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Bubblegum",
                'slug'      => "Bubblegum",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Candy",
                'slug'      => "Candy",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Cherry",
                'slug'      => "Cherry",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Chocolate",
                'slug'      => "Chocolate",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Citrus",
                'slug'      => "Citrus",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Coffee",
                'slug'      => "Coffee",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Earthy",
                'slug'      => "Earthy",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Fruity",
                'slug'      => "Fruity",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Grape",
                'slug'      => "Grape",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Hash",
                'slug'      => "Hash",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Honey",
                'slug'      => "Honey",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Lavender",
                'slug'      => "Lavender",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Lemon",
                'slug'      => "Lemon",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Licorice",
                'slug'      => "Licorice",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Lime",
                'slug'      => "Lime",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Mango",
                'slug'      => "Mango",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Mint",
                'slug'      => "Mint",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Musky",
                'slug'      => "Musky",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Orange",
                'slug'      => "Orange",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Perfume",
                'slug'      => "Perfume",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Pepper",
                'slug'      => "Pepper",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Pine",
                'slug'      => "Pine",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Pineapple",
                'slug'      => "Pineapple",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Raspberry",
                'slug'      => "Raspberry",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Rose",
                'slug'      => "Rose",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Skunk",
                'slug'      => "Skunk",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Spice",
                'slug'      => "Spice",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Strawberry",
                'slug'      => "Strawberry",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Sugar Cookies",
                'slug'      => "Sugar Cookies",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Sweet",
                'slug'      => "Sweet",
            ],
            [
                'meta_type' => "flavors",
                'name'      => "Vanilla",
                'slug'      => "Vanilla",
            ],
        ];

        foreach($flavors as $flavor) {
            DB::table('strains_taxonomies')->insert($flavor);
        }


        // Ailment
        $ailments = [
            [
                'meta_type' => "ailment",
                'name'      => "ADD/ADHD",
                'slug'      => "add-adhd",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Alzheimers",
                'slug'      => "alzheimers",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Anorexia",
                'slug'      => "anorexia",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Anxiety",
                'slug'      => "anxiety",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Asthma",
                'slug'      => "asthma",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Arthritis",
                'slug'      => "arthritis",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Bipolar Disorder",
                'slug'      => "bipolar-disorder",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Cancer",
                'slug'      => "cancer",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Chrons Disease",
                'slug'      => "chrons-disease",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Depression",
                'slug'      => "depression",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Epilepsy",
                'slug'      => "epilepsy",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Fibromyalgia",
                'slug'      => "fibromyalgia",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Headache/Migraines",
                'slug'      => "headache-migraines",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "IBS/GERD",
                'slug'      => "ibs-gerd",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Inflammation",
                'slug'      => "inflammation",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Insomnia",
                'slug'      => "insomnia",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Glaucoma",
                'slug'      => "glaucoma",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "HIV/AIDS",
                'slug'      => "hiv-aids",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Lack of Appetite",
                'slug'      => "lack-of-appetite",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Multiple Sclerosis",
                'slug'      => "multiple-sclerosis",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Muscle Spasms",
                'slug'      => "muscle-spasms",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Nausea",
                'slug'      => "nausea",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Pain",
                'slug'      => "pain",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "PMS",
                'slug'      => "pms",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "PTSD",
                'slug'      => "ptsd",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Rheumatoid Arthritis",
                'slug'      => "rheumatoid-arthritis",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Seizures",
                'slug'      => "seizures",
            ],
            [
                'meta_type' => "ailment",
                'name'      => "Stress",
                'slug'      => "stress",
            ],
        ];

        foreach($ailments as $ailment) {
            DB::table('strains_taxonomies')->insert($ailment);
        }
            
    }
}
