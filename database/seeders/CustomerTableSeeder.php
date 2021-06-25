<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'customers' ) -> insert(
            [
                "resource_id"       =>  "548752943584",

                "first_name"        =>  "Michael",
                "last_name"         =>  "Katey",

                "email"             =>  "billyston@gmail.com",
                "password"          =>  bcrypt( 'password123' ),

                "created_at"        => date("Y-m-d H:i:s"),
                "updated_at"        => date("Y-m-d H:i:s"),
            ]);
    }
}
