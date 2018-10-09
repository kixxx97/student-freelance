<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
        	'message' => 'This is to initiate a campaign to spread awareness of blood scarcity',
        	'title' => 'Tarp Design for Blood Awareness',
        	'date_needed' => Carbon::now()->addDays(25)->toDateTimeString(),
        	'job' => json_encode(['6FF3EF0']),
        	'created_at' => Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('posts')->insert([
        	'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
        	'message' => 'This is to initiate a campaign to spread awareness of blood scarcity',
        	'title' => 'Design our Intramurals 2019 Shirt!',
        	'date_needed' => Carbon::now()->addDays(25)->toDateTimeString(),
        	'job' => json_encode(['6FF3EF0']),
        	'created_at' => Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('posts')->insert([
        	'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
        	'message' => 'This is to initiate a campaign to spread awareness of blood scarcity',
        	'title' => '#MeToo Movement Website',
        	'date_needed' => Carbon::now()->addDays(25)->toDateTimeString(),
        	'job' => json_encode(['6FF3EF0']),
        	'created_at' => Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('posts')->insert([
        	'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
        	'message' => 'This is to initiate a campaign to spread awareness of blood scarcity',
        	'title' => 'No to fake news design tarpoline',
        	'date_needed' => Carbon::now()->addDays(25)->toDateTimeString(),
        	'job' => json_encode(['6FF3EF0']),
        	'created_at' => Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('posts')->insert([
        	'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
        	'message' => 'This is to initiate a campaign to spread awareness of blood scarcity',
        	'title' => 'Needing Graphic Designer for our company.',
        	'date_needed' => Carbon::now()->addDays(35)->toDateTimeString(),
        	'job' => json_encode(['6FF3EF0']),
        	'created_at' => Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('posts')->insert([
        	'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
        	'message' => 'This is to initiate a campaign to spread awareness of blood scarcity',
        	'title' => 'Come and show us your creativity',
        	'date_needed' => Carbon::now()->addDays(25)->toDateTimeString(),
        	'job' => json_encode(['6FF3EF0']),
        	'created_at' => Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('posts')->insert([
        	'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
        	'message' => 'This is to initiate a campaign to spread awareness of blood scarcity',
        	'title' => 'Tarp Design for AIDS Awareness',
        	'date_needed' => Carbon::now()->addDays(25)->toDateTimeString(),
        	'job' => json_encode(['6FF3EF0']),
        	'created_at' => Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon::now()->toDateTimeString()
        ]);

    }
}
