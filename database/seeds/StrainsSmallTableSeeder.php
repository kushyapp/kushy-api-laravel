<?php

use Illuminate\Database\Seeder;

class StrainsSmallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $newStrain = DB::table('strains')->insert([
        'name' => "100 OG",
        'slug' => "100-og",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "<p>This strain is named after it's high price in it's Hollywood home. As a 50/50 hybrid of indica and sativa, $100 OG does a great job offering pain relief with an alert, cerebral high.</p>",
        'thc' => "127",
        'cbd' => "16",
        'cbn' => "10",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "707 Headband",
        'slug' => "707-headband",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "A-10",
        'slug' => "a-10",
        'type' => "Indica",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Acapulco Gold",
        'slug' => "acapulco-gold",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m1ovv6wXsE1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Afghani Bullrider",
        'slug' => "afghani-bullrider",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Afghan Big Bud",
        'slug' => "afghan-big-bud",
        'type' => "Indica",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Talkative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lemon')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lavender')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Afghan Diesel",
        'slug' => "afghan-diesel",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Afghan Kush",
        'slug' => "afghan-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/3b69eac6d4d8383c15b98cfeb4493f6f/tumblr_mqilbn2nMp1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1300",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Afghani",
        'slug' => "afghani",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/43c7ce93ec2955d8473ec13ff73c1d3d/tumblr_nsdzmgKywO1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Afghanica",
        'slug' => "afghanica",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Afghooey",
        'slug' => "afghooey",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lvxdfmkUG41qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Talkative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Afgoo",
        'slug' => "afgoo",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/b03b92ebfafd84434e0abb2ac8d87b78/tumblr_nqvzlzJxj41qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Afgooey",
        'slug' => "afgooey",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lzqile9FXy1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Afwreck",
        'slug' => "afwreck",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lssdkmG6pJ1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Agent Orange",
        'slug' => "agent-orange",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/78956c948e8512085c7b31d07167baca/tumblr_nvpsngj0eO1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "AK-47",
        'slug' => "ak-47",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/d8787e6c4c554907a93f98a0ebb5da21/tumblr_nwn9ucn5CI1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "AK-48",
        'slug' => "ak-48",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/b3550e048346e2f02f970f168fb35fac/tumblr_n0fxwsJhmM1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Alaskan Thunder Fuck",
        'slug' => "alaskan-thunder-fuck",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/tumblr_madlxo1Ne71r6wmh5o1_1280.jpg",
        'description' => "",
        'thc' => "1500",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Alien Kush",
        'slug' => "alien-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lxtsqtEO7y1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Aloha",
        'slug' => "aloha",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Alohaberry",
        'slug' => "alohaberry",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Ambrosia",
        'slug' => "ambrosia",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Amethyst",
        'slug' => "amethyst",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Amnesia Haze",
        'slug' => "amnesia-haze",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lemon')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Anesthesia",
        'slug' => "anesthesia",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/35dd77630c49e6d2361cdb23862f5151/tumblr_mepumhMjtf1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Apollo 11",
        'slug' => "apollo-11",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/f6bade983b02046f0a2612a5bd291458/tumblr_mezb43FTwp1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Arabian Gold",
        'slug' => "arabian-gold",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Tingly')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Arjan's Strawberry Haze",
        'slug' => "arjan-s-strawberry-haze",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Atomic Northern Lights",
        'slug' => "atomic-northern-lights",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/a2b27de7606c9c052c854b88127c6a00/tumblr_mtst4dIN0y1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1100",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "A-Train",
        'slug' => "a-train",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Avalon",
        'slug' => "avalon",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Banana Diesel",
        'slug' => "banana-diesel",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Banana Kush",
        'slug' => "banana-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/bdefe9419ae5ae08ab98d2c7db3e50a5/tumblr_mv09jcX9oB1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1700",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "BC Roadkill",
        'slug' => "bc-roadkill",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "BC Sweet Tooth",
        'slug' => "bc-sweet-tooth",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Honey')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Berkeley",
        'slug' => "berkeley",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/8835c0fa86ece77f5a005ddcce0761e5/tumblr_nit9h7f6vq1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Talkative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Berry White",
        'slug' => "berry-white",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/ad4cabd8c41b9e07b3171617ca8be57d/tumblr_mxjc2kjbnQ1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1600",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Blueberry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Big Bud",
        'slug' => "big-bud",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lsxgkqydNW1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Big Budda Cheese",
        'slug' => "big-budda-cheese",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Big Wreck",
        'slug' => "big-wreck",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Tingly')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Black Dhalia",
        'slug' => "black-dhalia",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Black Diesel",
        'slug' => "black-diesel",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Black Domina",
        'slug' => "black-domina",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lpx6mwz2sV1qjczh3o1_400.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pepper')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Black Jack",
        'slug' => "black-jack",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lpzrjmjyjq1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "1800",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Black Label Kush",
        'slug' => "black-label-kush",
        'type' => "Indica",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Inflammation')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Black Widow",
        'slug' => "black-widow",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m2lho8WQ5G1qg9u7ro1_1280.png",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blackberry",
        'slug' => "blackberry",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/4cf0f013030cba603ce33f5e5d0f9c2a/tumblr_o0nckxF0J91qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1300",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blackberry Hashplant",
        'slug' => "blackberry-hashplant",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/4cf0f013030cba603ce33f5e5d0f9c2a/tumblr_o0nckxF0J91qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blackberry Kush",
        'slug' => "blackberry-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/199435971a4a686cb2c836a3069f455c/tumblr_np4tg9yQlf1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1300",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blockhead",
        'slug' => "blockhead",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Bayou",
        'slug' => "blue-bayou",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Champagne",
        'slug' => "blue-champagne",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/d024ae6f7593d53619f54169beeb8056/tumblr_o331dmtIiA1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Cheese",
        'slug' => "blue-cheese",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/aaad8ef1027811eaa5aa037f699d53f1/tumblr_n60ah6Pt6W1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Blueberry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Crack",
        'slug' => "blue-crack",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lzcrduVWJ01qjczh3o1_500.gif",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Diesel",
        'slug' => "blue-diesel",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m1z89fX66u1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Dragon",
        'slug' => "blue-dragon",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_llpu35yzzX1qk70f2o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "20",
        'cbn' => "20",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Dream",
        'slug' => "blue-dream",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/55241259e94e58901b2ac9b1811ca8cf/tumblr_o2r2wxcbOi1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "2000",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Goo",
        'slug' => "blue-goo",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Mystic",
        'slug' => "blue-mystic",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lw89t2c3fa1r53yjlo1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Blueberry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue OG",
        'slug' => "blue-og",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m0uwnnsDly1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Rhino",
        'slug' => "blue-rhino",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_maz4p0QCyr1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Satellite",
        'slug' => "blue-satellite",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Horny')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Inflammation')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Blueberry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Train",
        'slug' => "blue-train",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blue Widow",
        'slug' => "blue-widow",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/e28f0cbcca2a5d305b1714df14ae4765/tumblr_mj2ra7C6FW1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blueberry",
        'slug' => "blueberry",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/7c41f9cac3691c3829c6cec7fb25490c/tumblr_o5eo28nkaG1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1600",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Blueberry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blueberry Diesel",
        'slug' => "blueberry-diesel",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m522u5etO81rscqsqo1_1280.png",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blueberry Haze",
        'slug' => "blueberry-haze",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m522u5etO81rscqsqo1_1280.png",
        'description' => "",
        'thc' => "1200",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blueberry Headband",
        'slug' => "blueberry-headband",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m522u5etO81rscqsqo1_1280.png",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Blueberry Kush",
        'slug' => "blueberry-kush",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/0a77e75e89733264acc99471c24b20c6/tumblr_mkn8vnTT3q1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Blueberry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Boysenberry",
        'slug' => "boysenberry",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Brainstorm Haze",
        'slug' => "brainstorm-haze",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Talkative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Broke Diesel",
        'slug' => "broke-diesel",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Bruce Banner",
        'slug' => "bruce-banner",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/6f955c7cd4b2aa86a0e0184b7d5d1a93/tumblr_nnniwgwb701qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1900",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Bubba Kush",
        'slug' => "bubba-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/7e1a06062f9fa8fc9efb37fd8b3c385b/tumblr_o0e2gkn1AC1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1800",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Bubba OG",
        'slug' => "bubba-og",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_luqxnqFbIh1qjczh3o1_500.gif",
        'description' => "",
        'thc' => "1600",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Bubble Gum",
        'slug' => "bubble-gum",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lx6wfzOb2K1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "600",
        'cbd' => "1000",
        'cbn' => "100000",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Bubbleberry",
        'slug' => "bubbleberry",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m9dknkTW3f1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Bubblegun",
        'slug' => "bubblegun",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Buddha's Sister",
        'slug' => "buddha-s-sister",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m3n5oo33pN1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Burmese Kush",
        'slug' => "burmese-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m1ju6hDlhQ1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Butterscotch",
        'slug' => "butterscotch",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m8g33vzh3y1ql6amjo1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "C13 Haze",
        'slug' => "c13-haze",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m8g33vzh3y1ql6amjo1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lemon')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Cannadential",
        'slug' => "cannadential",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/114500f6e10cdae481545d70146a9101/tumblr_n33qwlTOrq1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Cannalope Haze",
        'slug' => "cannalope-haze",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/114500f6e10cdae481545d70146a9101/tumblr_n33qwlTOrq1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lime')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Carmelicious",
        'slug' => "carmelicious",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Casey Jones",
        'slug' => "casey-jones",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_me6z4rNCBA1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Talkative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Inflammation')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Cat Piss",
        'slug' => "cat-piss",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/f6bade983b02046f0a2612a5bd291458/tumblr_mezb43FTwp1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Ammonia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Cataract Kush",
        'slug' => "cataract-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m5fppzxoSE1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1400",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Champagne",
        'slug' => "champagne",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lu4b4iyxkz1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Charlottes Web",
        'slug' => "charlottes-web",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/c3a21eb5e4781310920bdd3b5d083864/tumblr_n7a85wDeM91qjczh3o1_r1_250.gif",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Cheese",
        'slug' => "cheese",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/aba09677766e453cc91aa32df1ed1210/tumblr_o0luzeTv321qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1300",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Chemdawg",
        'slug' => "chemdawg",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/4fb273e6804cdaa13e2014d276ccf313/tumblr_ntkh0ujeI31qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1700",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Chemdawg #4",
        'slug' => "chemdawg-4",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/4fb273e6804cdaa13e2014d276ccf313/tumblr_ntkh0ujeI31qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Chernobyl",
        'slug' => "chernobyl",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/4a6ab2c934e900bce8af6f3536b3aa3d/tumblr_ns8b4qPumj1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1700",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Cherry AK-47",
        'slug' => "cherry-ak-47",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Cherry Bomb",
        'slug' => "cherry-bomb",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m45cgazqF01qg9u7ro1_1280.png",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Cherry Kush",
        'slug' => "cherry-kush",
        'type' => "Organi",
        'featured_img' => "http://78.media.tumblr.com/tumblr_maidbupTHt1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1300",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Chiesel",
        'slug' => "chiesel",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/26782709c572792f78fc282deb6c21bb/tumblr_nfx38bjbI61qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "2300",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Chocolate Kush",
        'slug' => "chocolate-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lu2a12E1kl1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Coffee')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Chocolope",
        'slug' => "chocolope",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/f1cbfd609756a9ba6aea5d1811d4f9aa/tumblr_mmeyueeOXQ1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1900",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Coffee')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Church OG",
        'slug' => "church-og",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lr5xoglVJR1qjczh3o1_500.gif",
        'description' => "",
        'thc' => "127",
        'cbd' => "20",
        'cbn' => "10",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Horny')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Cinderella 99",
        'slug' => "cinderella-99",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/8c1d6dfeb4a6eb8633588974e9fa28cc/tumblr_n4r1icCjJo1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1200",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Citrus Kush",
        'slug' => "citrus-kush",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Connie Chung",
        'slug' => "connie-chung",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/230711bc0fd8eb188535f4043fdf1f90/tumblr_n6neekZvaL1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Cotton Candy Kush",
        'slug' => "cotton-candy-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_mdzax9tdHL1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Cracker Jack",
        'slug' => "cracker-jack",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Talkative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Critical Mass",
        'slug' => "critical-mass",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/dbcd5d87ae5069066f682eb8b6fd1437/tumblr_mlx0k5cvgk1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Inflammation')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Dairy Queen",
        'slug' => "dairy-queen",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/2effdca9df8277fa53467fd5fd0aeccc/tumblr_npcilzmGMM1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Darth Vader OG",
        'slug' => "darth-vader-og",
        'type' => "Indica",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Grape')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Death Star",
        'slug' => "death-star",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m6vn4utvgI1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Deep Purple",
        'slug' => "deep-purple",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_mecspdwVPL1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Tingly')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Grape')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Diablo",
        'slug' => "diablo",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m5ykpbn8551qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1700",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Inflammation')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Diesel Duff",
        'slug' => "diesel-duff",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "DJ Short Blueberry",
        'slug' => "dj-short-blueberry",
        'type' => "Indica",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Blueberry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Domino",
        'slug' => "domino",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Tingly')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Double D",
        'slug' => "double-d",
        'type' => "Sativa",
        'featured_img' => "",
        'description' => "",
        'thc' => "1800",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Double Diesel",
        'slug' => "double-diesel",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_mdztrcx3FH1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lime')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Dream Queen",
        'slug' => "dream-queen",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m4011pw1QZ1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "1200",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Durban Cheese",
        'slug' => "durban-cheese",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Durban Poison",
        'slug' => "durban-poison",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/48556abbec2ffe2f37a65f069b42e711/tumblr_mwqemsLJcK1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Dutch Treat",
        'slug' => "dutch-treat",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/ac440a0fe28573ffbb4f458713434ff9/tumblr_n8fgmjpJRp1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Early Girl",
        'slug' => "early-girl",
        'type' => "Indica",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Earthquake",
        'slug' => "earthquake",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "East Coast Sour Diesel",
        'slug' => "east-coast-sour-diesel",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/88346af2d51ca0e709d97379fcbd445e/tumblr_nwj8v0npuF1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Inflammation')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lemon')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Ed Rosenthal Super Bud",
        'slug' => "ed-rosenthal-super-bud",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "El Jeffe",
        'slug' => "el-jeffe",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "El Nino",
        'slug' => "el-nino",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/3acd148a4d65f5658053fc04cc468d9d/tumblr_nl7g804XXm1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Euphoria",
        'slug' => "euphoria",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_llro1rBbM31qjczh3o1_400.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Exodus Cheese",
        'slug' => "exodus-cheese",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/a029f15d314cbeb39a7b5275dab3f111/tumblr_nbykbgdQdt1qg9u7ro1_1280.jpg",
        'description' => "",
        'thc' => "500",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Fire Haze",
        'slug' => "fire-haze",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/a029f15d314cbeb39a7b5275dab3f111/tumblr_nbykbgdQdt1qg9u7ro1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Fire OG",
        'slug' => "fire-og",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/d44ab2cfdb195e92903d330e5432bf05/tumblr_o26wl0HPEr1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "2000",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Flo",
        'slug' => "flo",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/61f0b5ec7294c36099d1b18888c1b61a/tumblr_mmcqlfeqnb1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Frostbite",
        'slug' => "frostbite",
        'type' => "Sativa",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Tingly')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Skunk')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Fruity Pebbles",
        'slug' => "fruity-pebbles",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_ly42bf3KoI1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Fucking Incredible",
        'slug' => "fucking-incredible",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Skunk')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "G-13",
        'slug' => "g-13",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/6ba6711ad8376e32c54ea1fbee06a152/tumblr_nm9yaxyRKV1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "G13 Haze",
        'slug' => "g13-haze",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/6ba6711ad8376e32c54ea1fbee06a152/tumblr_nm9yaxyRKV1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "God Bud",
        'slug' => "god-bud",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/e9ba5d0da38fbd0d682567f5fd1ed174/tumblr_mez78t3w6F1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Inflammation')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Godberry",
        'slug' => "godberry",
        'type' => "Indica",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Blueberry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "God's Gift",
        'slug' => "god-s-gift",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m6aaz46usH1r6wmh5o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Golden Goat",
        'slug' => "golden-goat",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/5918a6353409ff1c5ef12d6297db5ba8/tumblr_mu3q8jAg1B1r57yh1o1_1280.jpg",
        'description' => "",
        'thc' => "1400",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Goo",
        'slug' => "goo",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_ls9h2jGcfS1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "1300",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Blueberry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Goldwing",
        'slug' => "goldwing",
        'type' => "Sativa",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Grand Hindu",
        'slug' => "grand-hindu",
        'type' => "Indica",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Horny')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Inflammation')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Grape')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Grandaddy Purple",
        'slug' => "grandaddy-purple",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/bc747e1534e2cf198979cd6a35836c6a/tumblr_o54sf4pIcg1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1400",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Grape Ape",
        'slug' => "grape-ape",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/4b7fab95f0e481bb13f4740b70c43f63/tumblr_ns4pdlfgwM1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1600",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Grape')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Grape Crush",
        'slug' => "grape-crush",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lnxk98SU1Q1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Grape')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Grape God",
        'slug' => "grape-god",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/2b2132c2bcbb4cf310d45c809fb1c29c/tumblr_mpv1i1UJDD1qg9u7ro1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Grape Kush",
        'slug' => "grape-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lq1vsth5O01qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Grape Skunk",
        'slug' => "grape-skunk",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Talkative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Skunk')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Grape')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Grapefruit",
        'slug' => "grapefruit",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/dfb9666a5c20e78a53e2041e8c7d89c7/tumblr_n6bkaow2JN1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "40",
        'cbn' => "20",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Grapefruit Haze",
        'slug' => "grapefruit-haze",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/dfb9666a5c20e78a53e2041e8c7d89c7/tumblr_n6bkaow2JN1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Talkative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lemon')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Gravity",
        'slug' => "gravity",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Horny')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Rose')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Green Candy",
        'slug' => "green-candy",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/88fc6ca6efcc5c3670badfa9d3703b4f/tumblr_n7kud6l7AZ1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Green Crack",
        'slug' => "green-crack",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/71ebcc2aec69aaa66410e2e6f00b68e4/tumblr_o1xm5n9xHW1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1700",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Green Crack Extreme",
        'slug' => "green-crack-extreme",
        'type' => "Sativa",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Talkative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Green Door Kush",
        'slug' => "green-door-kush",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Green Dream",
        'slug' => "green-dream",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_llmliffQQ11qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "1600",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Green Goblin",
        'slug' => "green-goblin",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m0a87zWqEO1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Green Hornet",
        'slug' => "green-hornet",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m0a87zWqEO1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Green Kush",
        'slug' => "green-kush",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Green Queen",
        'slug' => "green-queen",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_ltj6dukNrL1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Harlequin",
        'slug' => "harlequin",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/4cbafcd699dd6b9acabd3f28f8ca0ffd/tumblr_n8z0vkBH2K1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "600",
        'cbd' => "1000",
        'cbn' => "100000",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Inflammation')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hash Plant",
        'slug' => "hash-plant",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/tumblr_mc8caeaUCz1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "13",
        'cbn' => "3",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hashberry",
        'slug' => "hashberry",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lwn49j0mgA1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Tingly')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hashplant Haze",
        'slug' => "hashplant-haze",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lwn49j0mgA1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Blueberry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Orange')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hawaiian Delight",
        'slug' => "hawaiian-delight",
        'type' => "Indica",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Horny')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hawaiian Fire",
        'slug' => "hawaiian-fire",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hawaiian Sativa",
        'slug' => "hawaiian-sativa",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hawaiian Skunk",
        'slug' => "hawaiian-skunk",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lwkugpLIvl1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hawaiian Snow",
        'slug' => "hawaiian-snow",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lrm0a28qAf1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hawaiian Thunder Fuck",
        'slug' => "hawaiian-thunder-fuck",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Haze",
        'slug' => "haze",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/8bbca5c02fc93861cfdf3e6607472086/tumblr_o2nyir8mbm1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Headband",
        'slug' => "headband",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/6a90625c09647a961dc2cede0df9bed0/tumblr_o3yytdsY1q1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1900",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Heavy Duty Fruity",
        'slug' => "heavy-duty-fruity",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_me8suvLafe1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hempstar",
        'slug' => "hempstar",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/bb4442fa16b33161c7d45dfc3f8c748c/tumblr_n8axtmfn2C1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Herojuana",
        'slug' => "herojuana",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_mcuk4xbgqs1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1900",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Himalayan Gold",
        'slug' => "himalayan-gold",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hindu Kush",
        'slug' => "hindu-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_mbpkndXIcE1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hindu Skunk",
        'slug' => "hindu-skunk",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lufe3rLIxu1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Skunk')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hog's Breath",
        'slug' => "hog-s-breath",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hong Kong",
        'slug' => "hong-kong",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lww3auujwQ1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Huckleberry",
        'slug' => "huckleberry",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/66b421cee8b88eef9e34bb2ab88ac5c4/tumblr_nnmzzfJ2UO1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Hydro Green Crack",
        'slug' => "hydro-green-crack",
        'type' => "Sativa",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Ice",
        'slug' => "ice",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/9a3cdaa3e4bf7a8d30d8141f95c92d1d/tumblr_n4ju3gZ9VN1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Ice Cream",
        'slug' => "ice-cream",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m8e6rmsp8e1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Ingrid",
        'slug' => "ingrid",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m198k3XgiC1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Inflammation')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Skunk')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Island Sweet Skunk",
        'slug' => "island-sweet-skunk",
        'type' => "Sativa",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m9ebgjjFTY1qjczh3o1_500.gif",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Skunk')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "J1",
        'slug' => "j1",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_mbng67bkVU1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1100",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "J-27",
        'slug' => "j-27",
        'type' => "Sativa",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Orange')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Jack Flash",
        'slug' => "jack-flash",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lph9sh0NkP1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Jack Frost",
        'slug' => "jack-frost",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/42f0c470d91c5bcf78085e0498029db7/tumblr_mxce0hzMlY1qjczh3o1_1280.png",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Jack Herer",
        'slug' => "jack-herer",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/42f0c470d91c5bcf78085e0498029db7/tumblr_mxce0hzMlY1qjczh3o1_1280.png",
        'description' => "",
        'thc' => "1600",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Jack Kush",
        'slug' => "jack-kush",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Jack the Ripper",
        'slug' => "jack-the-ripper",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/fe6970f06a02df3a4a216c5864bd89e0/tumblr_nvpn01a1sD1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1100",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Talkative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lemon')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Jamaican Pearl",
        'slug' => "jamaican-pearl",
        'type' => "Sativa",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Jillybean",
        'slug' => "jillybean",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/a670b97294e6f380a05f961d40f216c5/tumblr_nvs71qytEU1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Juicy Fruit",
        'slug' => "juicy-fruit",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/998bb39aacad28d5b966bfd0a804f0fc/tumblr_mii6p073bN1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Jupiter Kush",
        'slug' => "jupiter-kush",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Jupiter OG",
        'slug' => "jupiter-og",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_mbgcihWQtC1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1700",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
                    
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Kaboom",
        'slug' => "kaboom",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/aef8a35756a75c05576b22829693b29c/tumblr_no2bdj9YiU1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    

    $newStrain = DB::table('strains')->insert([
        'name' => "Kali Mist",
        'slug' => "kali-mist",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lo5hx9ILDg1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "1000",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Kandy Kush",
        'slug' => "kandy-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lww232NxUj1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Key Lime Haze",
        'slug' => "key-lime-haze",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lww232NxUj1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
                   
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Killer Queen",
        'slug' => "killer-queen",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/2c9ae0d2811473f701b3b6535ffa5802/tumblr_ml0utqlhUN1qjczh3o2_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "King Kong",
        'slug' => "king-kong",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lsxgo0CkYD1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "King Kush",
        'slug' => "king-kush",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/tumblr_mbilvkRZQ51qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1800",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "King Louis",
        'slug' => "king-louis",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/tumblr_mcg6j9SZIU1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "1900",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "King's Bread",
        'slug' => "king-s-bread",
        'type' => "Sativa",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "20",
        'cbn' => "4",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "King's Kush",
        'slug' => "king-s-kush",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Kryptonite",
        'slug' => "kryptonite",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lqongenvfX1qjczh3o1_500.gif",
        'description' => "",
        'thc' => "1600",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Tingly')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Kush Berry",
        'slug' => "kush-berry",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/42ac666fd68b2ccf0422440d4b77c648/tumblr_n7g6nuVYUZ1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Kushberry",
        'slug' => "kushberry",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/ffa4187469ab0b1e005547f38f2bd172/tumblr_n8od2aYzqS1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Berry')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "LA Confidential",
        'slug' => "la-confidential",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/611214c07042979054313d6a6240318f/tumblr_o2r302lHYb1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1300",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "LA Jack",
        'slug' => "la-jack",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "LA Woman",
        'slug' => "la-woman",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lambo OG",
        'slug' => "lambo-og",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lamb's Bread",
        'slug' => "lamb-s-bread",
        'type' => "Sativa",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "20",
        'cbn' => "4",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lavender",
        'slug' => "lavender",
        'type' => "Indica",
        'featured_img' => "http://78.media.tumblr.com/c81601f48e3fd7e06194e0024d697a6f/tumblr_ml2yphcEiG1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lavender')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lavender Kush",
        'slug' => "lavender-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_lpzsiv26Lu1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "20",
        'cbn' => "30",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lemon Diesel",
        'slug' => "lemon-diesel",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/bf69e215f82f6dc283584bdb1df56411/tumblr_mjpu8qwrHF1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lemon Drop",
        'slug' => "lemon-drop",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/32f3ac476da1dbe7b8cd6c86875a851b/tumblr_napxgs1Jyb1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lemon G",
        'slug' => "lemon-g",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/67855cbb1da8ce4d622fee7c24959b9c/tumblr_o2nyiuoZQV1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Inflammation')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lemon')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lemon Haze",
        'slug' => "lemon-haze",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/67855cbb1da8ce4d622fee7c24959b9c/tumblr_o2nyiuoZQV1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1800",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lemon')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lemon Kush",
        'slug' => "lemon-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_mclnqeWNFp1qjczh3o1_500.jpg",
        'description' => "",
        'thc' => "1600",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lemon OG",
        'slug' => "lemon-og",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/0d8ae93a28b93090f15ecda044f9b306/tumblr_nb0puddK9t1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1900",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lemon Sativa",
        'slug' => "lemon-sativa",
        'type' => "Sativa",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lemon')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lemon Skunk",
        'slug' => "lemon-skunk",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/0284ed4bbd5931d2fbca88c67b57699c/tumblr_n46ly1h4mg1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lifesaver",
        'slug' => "lifesaver",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Lions Gate",
        'slug' => "lions-gate",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Uplifted')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Energetic')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Nausea')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Liquid Butter",
        'slug' => "liquid-butter",
        'type' => "Indica",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Talkative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "LSD",
        'slug' => "lsd",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/23feb117cdf6d4a8f6a3ec7ad51c21d3/tumblr_nf3njzODH21qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "LVPK",
        'slug' => "lvpk",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "M-39",
        'slug' => "m-39",
        'type' => "Indica",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Horny')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Lemon')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Mad Dawg",
        'slug' => "mad-dawg",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Madagascar",
        'slug' => "madagascar",
        'type' => "Indica",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Muscle Spasms')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Skunk')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Mako Haze",
        'slug' => "mako-haze",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Citrus')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Mango",
        'slug' => "mango",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/f69845cae240c0ad8a377e2e00a76406/tumblr_n5j9iya5901qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Anxious')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Mango')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Mango Dream",
        'slug' => "mango-dream",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_m8wq8frsyn1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Creative')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Focused')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Pain')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Sweet')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Mango')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Mango Kush",
        'slug' => "mango-kush",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/1628b2a8e559fb012bca1208afbbde62/tumblr_n5udktIAW21qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "1400",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Maple Leaf Indica",
        'slug' => "maple-leaf-indica",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                
                
                        
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Mars OG",
        'slug' => "mars-og",
        'type' => "Hybrid",
        'featured_img' => "http://78.media.tumblr.com/tumblr_ma3pdzKgpP1qjczh3o1_1280.jpg",
        'description' => "",
        'thc' => "127",
        'cbd' => "0",
        'cbn' => "0",
    ]);

                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Relaxed')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Sleepy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Happy')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Euphoric')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Hungry')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Dry Mouth')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
                    $effect = DB::table('strains_taxonomies')->where('meta_type', 'effects')->where('name', 'Paranoid')->first();
        
        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "effects",
            'meta_value' => $effect->id,
        ]);
        
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Stress')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Insomnia')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Lack of Appetite')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
                    $ailment = DB::table('strains_taxonomies')->where('meta_type', 'ailment')->where('name', 'Depression')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "ailment",
            'meta_value' => $ailment->id,
        ]);
        
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Pine')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                    $flavor = DB::table('strains_taxonomies')->where('meta_type', 'flavors')->where('name', 'Earthy')->first();

        $newMeta = DB::table('strains_metas')->insert([
            'strain_id' => $newStrain,
            'meta_key' => "flavor",
            'meta_value' => $flavor->id,
        ]);
                
    

    $newStrain = DB::table('strains')->insert([
        'name' => "Martian Mean Green",
        'slug' => "martian-mean-green",
        'type' => "Hybrid",
        'featured_img' => "",
        'description' => "",
        'thc' => "0",
        'cbd' => "0",
        'cbn' => "0",
    ]);

    }
}