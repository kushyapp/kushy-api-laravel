<?php

use Illuminate\Database\Seeder;

class PostsRelationshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts_relationships')->delete();
        
        \DB::table('posts_relationships')->insert(array (
            0 => 
            array (
                'id' => '46d3be40-5d2b-11e8-a98a-d35a59b240e8',
                'post_id' => '013f7600-5d23-11e8-b9db-0790bff71e16',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            1 => 
            array (
                'id' => '46d44010-5d2b-11e8-be81-5f8a49767b75',
                'post_id' => '045afdc0-5d24-11e8-abcb-01ee695a162f',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            2 => 
            array (
                'id' => '46d499e0-5d2b-11e8-af46-b1a6c79b4bf0',
                'post_id' => '08581810-5d23-11e8-a0ab-63806e45146c',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            3 => 
            array (
                'id' => '46d4c9e0-5d2b-11e8-b59f-8937df908aa2',
                'post_id' => '0a91aea0-5d24-11e8-8b3e-69e8fe1094f1',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            4 => 
            array (
                'id' => '46d4fa50-5d2b-11e8-85f0-af7af1e521e5',
                'post_id' => '10baff50-5d23-11e8-9071-6b61272c0f90',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            5 => 
            array (
                'id' => '46d527a0-5d2b-11e8-8ecb-198337aa9333',
                'post_id' => '11de81c0-5d24-11e8-a60a-af0e3b318c5a',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            6 => 
            array (
                'id' => '46d55820-5d2b-11e8-9275-91a2921c1b6f',
                'post_id' => '1790cf20-5d23-11e8-b07a-cd3089d2b209',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            7 => 
            array (
                'id' => '46d58db0-5d2b-11e8-aa80-895e4232ed0e',
                'post_id' => '18f60630-5d24-11e8-99fa-11767c6722a4',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            8 => 
            array (
                'id' => '46d5bcd0-5d2b-11e8-86c5-9511ebb1d2c6',
                'post_id' => '1e1c97a0-5d24-11e8-b3d2-91f1664c9865',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            9 => 
            array (
                'id' => '46d5efe0-5d2b-11e8-aa04-271b3875ba76',
                'post_id' => '20d92020-5d23-11e8-9407-7fd2702cd65e',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            10 => 
            array (
                'id' => '46d62680-5d2b-11e8-982b-bff46be57b9e',
                'post_id' => '24c17f80-5d24-11e8-901b-1b0eebdbbc36',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            11 => 
            array (
                'id' => '46d65570-5d2b-11e8-90e1-bfb901fc070c',
                'post_id' => '3160cdc0-5d24-11e8-afe1-d39038e4ad7a',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            12 => 
            array (
                'id' => '46d68530-5d2b-11e8-9427-17dc95c6b3e8',
                'post_id' => '389472d0-5d24-11e8-a5c2-d30cf0d372ba',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            13 => 
            array (
                'id' => '46d6b4f0-5d2b-11e8-bb2c-bd2e07938dec',
                'post_id' => '419676c0-5d24-11e8-90c6-d30d0c6b8017',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            14 => 
            array (
                'id' => '46d6e360-5d2b-11e8-8bb5-a11e4bb81cdf',
                'post_id' => '476e6c50-5d24-11e8-8dc6-0ba84bafe5f1',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            15 => 
            array (
                'id' => '46d71950-5d2b-11e8-a047-ddf9be31e6f5',
                'post_id' => '4d1e5b60-5d24-11e8-9e12-9749bfc08c0d',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            16 => 
            array (
                'id' => '46d746f0-5d2b-11e8-ad75-1f8de258f1df',
                'post_id' => '57c69970-5d24-11e8-8ea5-0d2ebfacac9d',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            17 => 
            array (
                'id' => '46d77490-5d2b-11e8-97e2-1f4abbb2e7ec',
                'post_id' => '5f5295f0-5d24-11e8-9e06-65556a6bd4b4',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            18 => 
            array (
                'id' => '46d7a500-5d2b-11e8-b795-7528c19b4843',
                'post_id' => '611fd8e0-5d22-11e8-a4bf-97d0fb1e1bff',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            19 => 
            array (
                'id' => '46d7daa0-5d2b-11e8-a0f2-f13773f1cddc',
                'post_id' => '6515faa0-5d24-11e8-81f8-2fce250ae5cc',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            20 => 
            array (
                'id' => '46d807a0-5d2b-11e8-89e4-b983eb27ad5b',
                'post_id' => '6b7b6590-5d24-11e8-a936-91fa1a477751',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            21 => 
            array (
                'id' => '46d83560-5d2b-11e8-910d-73c34de93184',
                'post_id' => '71e46b20-5d24-11e8-9115-fbd30e0f37c0',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            22 => 
            array (
                'id' => '46d86690-5d2b-11e8-8fd2-51f8df90edec',
                'post_id' => '7e354920-5d22-11e8-9190-b994351f3fd3',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            23 => 
            array (
                'id' => '46d8a3b0-5d2b-11e8-9cde-97620e78463a',
                'post_id' => '84e00c40-5d24-11e8-9774-f31ae3e47eba',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            24 => 
            array (
                'id' => '46d8d960-5d2b-11e8-b270-dd904d6d6146',
                'post_id' => '8c0ef750-5d24-11e8-8e51-99743acc66f9',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            25 => 
            array (
                'id' => '46d90a50-5d2b-11e8-a439-7da5fa119ac3',
                'post_id' => '91490440-5d23-11e8-914a-97384f48fe00',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            26 => 
            array (
                'id' => '46d93730-5d2b-11e8-b9f9-b1e796163fac',
                'post_id' => '93c78eb0-5d24-11e8-a201-f74dc9fa59bf',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            27 => 
            array (
                'id' => '46d966e0-5d2b-11e8-8bd5-c5b35a659aeb',
                'post_id' => '94a247f0-5d1f-11e8-b74a-fbe6594ee287',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            28 => 
            array (
                'id' => '46d994f0-5d2b-11e8-b517-9bbc9b41b86c',
                'post_id' => '99c656b0-5d24-11e8-9e52-c900cc692dd8',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            29 => 
            array (
                'id' => '46d9c8a0-5d2b-11e8-b112-33ccdc5ccb95',
                'post_id' => '9bd013b0-5d23-11e8-8929-8f35578053de',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            30 => 
            array (
                'id' => '46d9ff90-5d2b-11e8-ba1e-a390779de1bd',
                'post_id' => '9faae4f0-5d24-11e8-aefe-87b59b705533',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            31 => 
            array (
                'id' => '46da3060-5d2b-11e8-8d65-67cc247651f8',
                'post_id' => 'a4f34030-5d24-11e8-ba7f-95425af1967b',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            32 => 
            array (
                'id' => '46da5e30-5d2b-11e8-9a23-d58cb67902ee',
                'post_id' => 'a6e977c0-5d23-11e8-9058-0d36b94a54ef',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            33 => 
            array (
                'id' => '46da8c90-5d2b-11e8-a97a-c159866a6822',
                'post_id' => 'a9d4f440-5d24-11e8-b539-4fd9fb948d4c',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            34 => 
            array (
                'id' => '46dabf80-5d2b-11e8-ae49-6f30d13f829d',
                'post_id' => 'aeadb500-5d23-11e8-9c0c-3381d6713cf3',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            35 => 
            array (
                'id' => '46daf280-5d2b-11e8-8656-7f46c4d97cff',
                'post_id' => 'af1037f0-5d24-11e8-bf9f-67dcdcff31e6',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            36 => 
            array (
                'id' => '46db2f80-5d2b-11e8-9d89-f7b4483701fb',
                'post_id' => 'b46e5a60-5d24-11e8-9e95-ff1fff50940e',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            37 => 
            array (
                'id' => '46db5e40-5d2b-11e8-9c46-5b28be2839b7',
                'post_id' => 'b6c65b20-5d23-11e8-9eec-b9049d66361f',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            38 => 
            array (
                'id' => '46db9400-5d2b-11e8-8d72-c5eb023413e6',
                'post_id' => 'b9935470-5d24-11e8-b0ac-657ff776ee24',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            39 => 
            array (
                'id' => '46dbc420-5d2b-11e8-aaaf-b57cfcac914d',
                'post_id' => 'bf5a5840-5d23-11e8-92ab-b77ecac0dd8e',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            40 => 
            array (
                'id' => '46dbf7b0-5d2b-11e8-b7b5-09c9a145209b',
                'post_id' => 'c6d228a0-5d24-11e8-9fce-79ff760c691e',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            41 => 
            array (
                'id' => '46dc2ad0-5d2b-11e8-a059-ff256c6fb1d8',
                'post_id' => 'c70aae20-5d23-11e8-87c6-c57db5805abd',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            42 => 
            array (
                'id' => '46dc5ce0-5d2b-11e8-b488-b772636aff0d',
                'post_id' => 'cbea8a80-5d24-11e8-89ad-8796e1496f14',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            43 => 
            array (
                'id' => '46dc9750-5d2b-11e8-a417-df9e2e079801',
                'post_id' => 'd1171cd0-5d24-11e8-a078-57adb207c183',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            44 => 
            array (
                'id' => '46dcdd30-5d2b-11e8-8021-c3bd3b875bfe',
                'post_id' => 'd6c386d0-5d24-11e8-8b0d-b71adf1b975a',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            45 => 
            array (
                'id' => '46dd15a0-5d2b-11e8-8a1b-adcfb1c3f22a',
                'post_id' => 'dc1bb3a0-5d23-11e8-9ddc-43731aedcc13',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            46 => 
            array (
                'id' => '46dd43d0-5d2b-11e8-9309-1d28185738a3',
                'post_id' => 'dc7cd2b0-5d24-11e8-9e34-bf72a7482a4a',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            47 => 
            array (
                'id' => '46dd74a0-5d2b-11e8-8d65-197b5c42317c',
                'post_id' => 'e3099ee0-5d24-11e8-babd-a33b01afa758',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            48 => 
            array (
                'id' => '46ddab30-5d2b-11e8-98db-9912abad0dca',
                'post_id' => 'e35abb10-5d23-11e8-b04f-31e2354a617f',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            49 => 
            array (
                'id' => '46dddb50-5d2b-11e8-a4c7-114fc89f3454',
                'post_id' => 'e89b2d50-5d24-11e8-bf97-01129623fd92',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            50 => 
            array (
                'id' => '46de0aa0-5d2b-11e8-935f-0944060c7fa8',
                'post_id' => 'e9ca2320-5d23-11e8-b5b8-cfbd7ec15c63',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            51 => 
            array (
                'id' => '46de37a0-5d2b-11e8-93f5-d712f7e1a00a',
                'post_id' => 'f0ac1610-5d23-11e8-8dee-831dc26c9d50',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            52 => 
            array (
                'id' => '46de66a0-5d2b-11e8-a0f3-3368fb000d56',
                'post_id' => 'f68090d0-5d22-11e8-9c36-cbbc63d62320',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            53 => 
            array (
                'id' => '46de9270-5d2b-11e8-9c1a-01bd4972826e',
                'post_id' => 'f85cc300-5d23-11e8-b01e-358cfebe689b',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            54 => 
            array (
                'id' => '46dec300-5d2b-11e8-af1c-196d52c11ac2',
                'post_id' => 'fe3f3e30-5d23-11e8-a888-6f1145f5972e',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
            55 => 
            array (
                'id' => '91a1e110-5d40-11e8-8798-c570a85d2d8d',
                'post_id' => '91991700-5d40-11e8-9851-616ec30cf957',
                'parent_id' => 'b5c9eba0-5cb4-11e8-a29a-cf7a68a1ae49',
            ),
        ));
        
        
    }
}