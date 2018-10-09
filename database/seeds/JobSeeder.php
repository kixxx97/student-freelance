<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
        	'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
        	'name' => 'HTML',
        	'created_at' => Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('jobs')->insert([
        	'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
        	'name' => 'Graphic Designer',
        	'created_at' => Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('jobs')->insert([
        	'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
        	'name' => 'Photoshop',
        	'created_at' => Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('jobs')->insert([
        	'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
        	'name' => 'Content Creator',
        	'created_at' => Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        DB::table('jobs')->insert([
        	'id' => strtoupper(substr(sha1(mt_rand() . microtime()), mt_rand(0,35), 7)),
        	'name' => 'Programmer',
        	'created_at' => Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
