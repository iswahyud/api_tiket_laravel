<?php

namespace Database\Seeders;

use App\Models\Tiket_model;
use Illuminate\Database\Seeder;
//uuid
use Illuminate\Support\Str;

class TiketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Let's truncate our existing records to start from scratch.
         Tiket_model::truncate();
 
         // And now, let's create a few articles in our database:
         for ($i = 1; $i <= 5; $i++) {
            //create uuid
            $uuid = Str::uuid()->toString();

            Tiket_model::create([
                 'id' => $uuid,
                 'subject' => 'Subject ' . $i,
                 'message' => 'Message ' . $i,
                 'status' => 'Open',
                 'priority' => 'Medium',
             ]);
         }
    }
}
